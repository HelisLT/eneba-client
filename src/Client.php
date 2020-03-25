<?php
declare(strict_types=1);

namespace Helis\EnebaClient;

use DateTime;
use Helis\EnebaClient\Credentials\ClientCredentialsInterface;
use Helis\EnebaClient\Denormalizer\Denormalizer;
use Helis\EnebaClient\Denormalizer\DenormalizerInterface;
use Helis\EnebaClient\Enum\SelectionSetFactoryProviderNameEnum as ProviderNameEnum;
use Helis\EnebaClient\Exception\GeneralException;
use Helis\EnebaClient\Exception\GraphQLException;
use Helis\EnebaClient\Exception\HttpException;
use Helis\EnebaClient\Model\AccessToken;
use Helis\EnebaClient\Model\ActionResponse;
use Helis\EnebaClient\Model\ActionState;
use Helis\EnebaClient\Model\Input\KeysFilter;
use Helis\EnebaClient\Model\Input\ProductsFilter;
use Helis\EnebaClient\Model\Input\SalesFilter;
use Helis\EnebaClient\Model\Input\StockFilter;
use Helis\EnebaClient\Model\Product;
use Helis\EnebaClient\Model\Relay\Connection\KeyConnection;
use Helis\EnebaClient\Model\Relay\Connection\ProductConnection;
use Helis\EnebaClient\Model\Relay\Connection\SalesConnection;
use Helis\EnebaClient\Model\Relay\Connection\StockConnection;
use Helis\EnebaClient\Provider\SelectionSetFactoryProvider;
use Helis\EnebaClient\Provider\SelectionSetFactoryProviderInterface;
use Helis\EnebaClient\Storage\AccessTokenStorageInterface;
use Helis\EnebaClient\Storage\ArrayAccessTokenStorage;
use Helis\GraphqlQueryBuilder\Argument\VariableValue;
use Helis\GraphqlQueryBuilder\Mutation;
use Helis\GraphqlQueryBuilder\Query;
use Helis\GraphqlQueryBuilder\SelectionSet\Field;
use Helis\GraphqlQueryBuilder\SelectionSet\SelectionSet;
use Helis\GraphqlQueryBuilder\Variable\ScalarVariable;
use Helis\GraphqlQueryBuilder\Variable\StringVariable;
use Http\Client\Curl\Client as CurlClient;
use Http\Client\HttpClient;
use Http\Message\MessageFactory;
use Http\Message\MessageFactory\DiactorosMessageFactory;
use Money\Money;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Log\LoggerInterface;
use Ramsey\Uuid\UuidInterface;
use Webmozart\Assert\Assert;

class Client implements ClientInterface
{
    private $logger;
    private $client;
    private $messageFactory;
    private $denormalizer;
    private $credentials;
    private $tokenStorage;
    private $selectionSetFactoryProvider;

    /**
     * @var string|null
     */
    private $oauthUrl;

    /**
     * @var string|null
     */
    private $graphQLUrl;

    /**
     * @var string|null
     */
    private $oauthClientId;

    public function __construct(
        ClientCredentialsInterface $credentials,
        ?HttpClient $client = null,
        ?MessageFactory $messageFactory = null,
        ?DenormalizerInterface $denormalizer = null,
        ?SelectionSetFactoryProviderInterface $selectionSetFactoryProvider = null,
        ?AccessTokenStorageInterface $tokenStorage = null,
        ?LoggerInterface $logger = null
    ) {
        $this->credentials = $credentials;
        $this->logger = $logger;
        $this->client = $client ?: new CurlClient();
        $this->messageFactory = $messageFactory ?: new DiactorosMessageFactory();
        $this->tokenStorage = $tokenStorage ?: new ArrayAccessTokenStorage();
        $this->denormalizer = $denormalizer ?: Denormalizer::getInstance();
        $this->selectionSetFactoryProvider = $selectionSetFactoryProvider ?: SelectionSetFactoryProvider::getInstance();
    }

    public function getSales(?SalesFilter $filter = null): SalesConnection
    {
        $query = $this->createConnectionQuery(
            Eneba::GQL_SALES_QUERY,
            $this->selectionSetFactoryProvider->get(ProviderNameEnum::SALES_CONNECTION())->get(),
            [
                'dateFrom' => new VariableValue('$dateFrom'),
                'dateTo' => new VariableValue('$dateTo'),
                'auctionId' => new VariableValue('$auctionId'),
            ]
        )
            ->addVariable(new ScalarVariable('$dateFrom', 'S_DateTime'))
            ->addVariable(new ScalarVariable('$dateTo', 'S_DateTime'))
            ->addVariable(new ScalarVariable('$auctionId', 'S_Uuid'));

        $request = $this->createMessage($query->toString(), $filter ? [
            'cursor' => $this->generateCursor($filter->getPage(), $filter->getPerPage()),
            'limit' => $filter->getPerPage(),
            'dateFrom' => $filter->getDateFrom() ? $filter->getDateFrom()->format('c') : null,
            'dateTo' => $filter->getDateTo() ? $filter->getDateTo()->format('c') : null,
            'auctionId' => $filter->getAuctionId() ? $filter->getAuctionId()->toString() : null,
        ] : []);

        $response = $this->client->sendRequest($request);
        $data = $this->handleResponse($response);

        return $this->denormalizer->denormalize($data['data'][Eneba::GQL_SALES_QUERY], SalesConnection::class);
    }

    public function getStock(?StockFilter $filter = null): StockConnection
    {
        $query = $this->createConnectionQuery(
            Eneba::GQL_STOCK_QUERY,
            $this->selectionSetFactoryProvider->get(ProviderNameEnum::STOCK_CONNECTION())->get()
        );

        $request = $this->createMessage($query->toString(), $filter ? [
            'cursor' => $this->generateCursor($filter->getPage(), $filter->getPerPage()),
            'limit' => $filter->getPerPage(),
        ] : []);

        $response = $this->client->sendRequest($request);
        $data = $this->handleResponse($response);

        return $this->denormalizer->denormalize($data['data'][Eneba::GQL_STOCK_QUERY], StockConnection::class);
    }

    public function getProducts(?ProductsFilter $filter = null): ProductConnection
    {
        $query = $this->createConnectionQuery(
            Eneba::GQL_PRODUCTS_QUERY,
            $this->selectionSetFactoryProvider->get(ProviderNameEnum::PRODUCT_CONNECTION())->get()
        );

        $request = $this->createMessage($query->toString(), $filter ? [
            'cursor' => $this->generateCursor($filter->getPage(), $filter->getPerPage()),
            'limit' => $filter->getPerPage(),
        ] : []);

        $response = $this->client->sendRequest($request);
        $data = $this->handleResponse($response);

        return $this->denormalizer->denormalize($data['data'][Eneba::GQL_PRODUCTS_QUERY], ProductConnection::class);
    }

    public function getProduct(UuidInterface $productId): ?Product
    {
        $query = (new Query())
            ->addField(
                new Field(
                    Eneba::GQL_PRODUCT_QUERY,
                    $this->selectionSetFactoryProvider->get(ProviderNameEnum::PRODUCT_WITH_AUCTION())->get(),
                    [
                        'productId' => new VariableValue('$id'),
                    ]
                )
            )
            ->addVariable(new ScalarVariable('$id', 'S_Uuid', true));

        $request = $this->createMessage($query->toString(), ['id' => $productId->toString()]);

        $response = $this->client->sendRequest($request);
        $data = $this->handleResponse($response);

        return $this->denormalizer->denormalize($data['data'][Eneba::GQL_PRODUCT_QUERY], Product::class);
    }

    public function updateAuction(UuidInterface $auctionId, Money $price): ActionResponse
    {
        $mutation = (new Mutation())
            ->addField(
                new Field(
                    Eneba::GQL_UPDATE_AUCTION_MUTATION,
                    $this->selectionSetFactoryProvider->get(ProviderNameEnum::ACTION_RESPONSE())->get(),
                    [
                        'input' => new VariableValue('$input'),
                    ]
                )
            )
            ->addVariable(new ScalarVariable('$input', 'S_API_UpdateAuctionInput', true));

        $request = $this->createMessage($mutation->toString(), [
            'input' => [
                'id' => $auctionId->toString(),
                'price' => [
                    'amount' => (int)$price->getAmount(),
                    'currency' => $price->getCurrency()->getCode(),
                ],
            ],
        ]);

        $response = $this->client->sendRequest($request);
        $data = $this->handleResponse($response);

        return $this->denormalizer->denormalize(
            $data['data'][Eneba::GQL_UPDATE_AUCTION_MUTATION],
            ActionResponse::class
        );
    }

    /**
     * @param string[] $keys
     */
    public function addKeysToAuction(UuidInterface $auctionId, array $keys): ActionResponse
    {
        Assert::notEmpty($keys);
        Assert::allString($keys);

        $mutation = (new Mutation())
            ->addField(
                new Field(
                    Eneba::GQL_UPDATE_AUCTION_MUTATION,
                    $this->selectionSetFactoryProvider->get(ProviderNameEnum::ACTION_RESPONSE())->get(),
                    [
                        'input' => new VariableValue('$input'),
                    ]
                )
            )
            ->addVariable(new ScalarVariable('$input', 'S_API_UpdateAuctionInput', true));

        $request = $this->createMessage($mutation->toString(), [
            'input' => [
                'id' => $auctionId->toString(),
                'addedKeys' => array_unique($keys),
            ],
        ]);

        $response = $this->client->sendRequest($request);
        $data = $this->handleResponse($response);

        return $this->denormalizer->denormalize(
            $data['data'][Eneba::GQL_UPDATE_AUCTION_MUTATION],
            ActionResponse::class
        );
    }

    /**
     * @param UuidInterface[] $keysIds
     */
    public function removeKeysFromAuction(UuidInterface $auctionId, array $keysIds): ActionResponse
    {
        Assert::notEmpty($keysIds);
        Assert::allIsInstanceOf($keysIds, UuidInterface::class);

        $mutation = (new Mutation())
            ->addField(
                new Field(
                    Eneba::GQL_UPDATE_AUCTION_MUTATION,
                    $this->selectionSetFactoryProvider->get(ProviderNameEnum::ACTION_RESPONSE())->get(),
                    [
                        'input' => new VariableValue('$input'),
                    ]
                )
            )
            ->addVariable(new ScalarVariable('$input', 'S_API_UpdateAuctionInput', true));

        $request = $this->createMessage($mutation->toString(), [
            'input' => [
                'id' => $auctionId->toString(),
                'removedKeys' => array_map('strval', array_unique($keysIds)),
            ],
        ]);

        $response = $this->client->sendRequest($request);
        $data = $this->handleResponse($response);

        return $this->denormalizer->denormalize(
            $data['data'][Eneba::GQL_UPDATE_AUCTION_MUTATION],
            ActionResponse::class
        );
    }

    public function getAuctionKeys(UuidInterface $auctionId, ?KeysFilter $filter = null): KeyConnection
    {
        $query = $this->createConnectionQuery(
            Eneba::GQL_KEYS_QUERY,
            $this->selectionSetFactoryProvider->get(ProviderNameEnum::KEY_CONNECTION())->get(),
            [
                'stockId' => new VariableValue('$stockId'),
            ]
        )
            ->addVariable(new ScalarVariable('$stockId', 'S_Uuid', true));

        $request = $this->createMessage(
            $query->toString(),
            array_merge(['stockId' => $auctionId->toString()], $filter ? [
                'cursor' => $this->generateCursor($filter->getPage(), $filter->getPerPage()),
                'limit' => $filter->getPerPage(),
            ] : [])
        );

        $response = $this->client->sendRequest($request);
        $data = $this->handleResponse($response);

        return $this->denormalizer->denormalize($data['data'][Eneba::GQL_KEYS_QUERY], KeyConnection::class);
    }

    public function getActionState(UuidInterface $actionId): ?ActionState
    {
        $query = (new Query())
            ->addField(
                new Field(
                    Eneba::GQL_ACTION_QUERY,
                    $this->selectionSetFactoryProvider->get(ProviderNameEnum::ACTION())->get(),
                    [
                        'actionId' => new VariableValue('$id'),
                    ]
                )
            )
            ->addVariable(new ScalarVariable('$id', 'A_Uuid', true));

        $request = $this->createMessage($query->toString(), ['id' => $actionId->toString()]);

        $response = $this->client->sendRequest($request);
        $data = $this->handleResponse($response);

        return $this->denormalizer->denormalize($data['data'][Eneba::GQL_ACTION_QUERY], ActionState::class);
    }

    public function setOauthClientId(?string $oauthClientId): void
    {
        $this->oauthClientId = $oauthClientId;
    }

    public function setOauthUrl(?string $oauthUrl): void
    {
        $this->oauthUrl = $oauthUrl;
    }

    public function setGraphQLUrl(?string $graphQLUrl): void
    {
        $this->graphQLUrl = $graphQLUrl;
    }

    private function getGraphQLUrl(): string
    {
        return $this->graphQLUrl ?: Eneba::DEFAULT_GRAPHQL_URL;
    }

    private function getOauthUrl(): string
    {
        return $this->oauthUrl ?: Eneba::DEFAULT_OAUTH_URL;
    }

    private function getOauthClientId(): string
    {
        return $this->oauthClientId ?: Eneba::DEFAULT_OAUTH_CLIENT_ID;
    }

    private function handleResponse(ResponseInterface $response, bool $graphql = true): array
    {
        if (!$this->isJsonResponse($response)) {
            $this->logger && $this->logger->error('Response does not contain valid JSON data', [
                'response' => $response,
            ]);
            throw new GeneralException('Response is not "application/json" type');
        }

        $data = json_decode((string)$response->getBody(), true);

        if ($response->getStatusCode() !== 200) {
            $this->logger && $this->logger->error('Response status is not 200', [
                'response' => $response,
            ]);

            if (!$graphql) {
                throw new HttpException($data['message'] ?? 'HTTP exception');
            }

            $messages = array_column($data['errors'] ?? [], 'message');
            $exceptions = array_column(array_column($data['errors'] ?? [], 'extensions'), 'code');
            throw new GraphQLException($messages, $exceptions);
        }

        if (isset($data['errors'])) {
            $messages = array_column($data['errors'] ?? [], 'message');
            $exceptions = array_column(array_column($data['errors'] ?? [], 'extensions'), 'code');
            throw new GraphQLException($messages, $exceptions);
        }

        return $data;
    }

    private function createConnectionQuery(
        string $name,
        SelectionSet $selectionSet,
        array $selectionSetArgs = []
    ): Query {
        return (new Query())
            ->addField(
                new Field($name, $selectionSet, [
                        'after' => new VariableValue('$cursor'),
                        'first' => new VariableValue('$limit'),
                    ] + $selectionSetArgs)
            )
            ->addVariable(new StringVariable('$cursor'))
            ->addVariable(new ScalarVariable('$limit', 'Int'));
    }

    private function getHeaders(string $contentType = 'application/json', bool $authorized = true): array
    {
        $headers = [
            'X-API-Client-Version' => Eneba::API_CLIENT_VERSION,
            'Content-Type' => $contentType,
            'Accept' => 'application/json',
        ];

        if ($authorized) {
            $headers['Authorization'] = 'Bearer ' . $this->getAuthorizationToken();
        }

        return $headers;
    }

    private function getAuthorizationToken(): string
    {
        $storedToken = $this->tokenStorage->get();
        if ($storedToken) {
            return $storedToken;
        }

        $accessToken = $this->authorize($this->credentials);
        $this->tokenStorage->set(
            $accessToken->getToken(),
            new DateTime('+' . ($accessToken->getExpiresIn() - Eneba::TOKEN_EXPIRATION_TIME_WINDOW) . ' seconds')
        );

        return $accessToken->getToken();
    }

    private function authorize(ClientCredentialsInterface $credentials): AccessToken
    {
        $body = http_build_query([
            'grant_type' => Eneba::OAUTH_GRANT_TYPE,
            'client_id' => $this->getOauthClientId(),
            'id' => $credentials->getClientId(),
            'secret' => $credentials->getClientSecret(),
        ]);

        $request = $this->messageFactory->createRequest(
            'POST',
            $this->getOauthUrl(),
            $this->getHeaders('application/x-www-form-urlencoded', false),
            $body
        );

        $response = $this->client->sendRequest($request);
        $data = $this->handleResponse($response, false);

        return $this->denormalizer->denormalize($data, AccessToken::class);
    }

    private function generateCursor(int $page, int $perPage = 20): ?string
    {
        if ($page === 1) {
            return null;
        }

        return base64_encode('arrayconnection:' . ($page - 1) * $perPage);
    }

    private function createMessage(string $query, array $variables = []): RequestInterface
    {
        return $this->messageFactory->createRequest(
            'POST',
            $this->getGraphQLUrl(),
            $this->getHeaders(),
            json_encode(['query' => $query, 'variables' => $variables,])
        );
    }

    private function isJsonResponse(ResponseInterface $response): bool
    {
        $header = $response->getHeader('Content-Type')[0] ?? null;
        [$type,] = explode(';', $header);

        return $type === 'application/json';
    }
}
