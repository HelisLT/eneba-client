<?php

declare(strict_types=1);

namespace Helis\EnebaClient\Tests;

use DateTime;
use Helis\EnebaClient\Client as EnebaClient;
use Helis\EnebaClient\Credentials\ClientCredentials;
use Helis\EnebaClient\Enum\CallbackTypeEnum;
use Helis\EnebaClient\Model\Input\Callback;
use Helis\EnebaClient\Storage\ArrayAccessTokenStorage;
use Http\Mock\Client as MockClient;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;
use Ramsey\Uuid\Uuid;

class ClientTest extends TestCase
{
    public function testDeclareAuctionStock(): void
    {
        $mockClient = new MockClient();
        $mockClient->addResponse($this->getMockResponse(json_encode([
            'data' => [
                'S_updateAuction' => [
                    'isSuccessful' => true,
                ],
            ],
        ])));

        $client = $this->createEnebaClient($mockClient);
        $result = $client->declareAuctionStock(Uuid::fromString('8f6f8e56-fe80-11eb-9a03-0242ac130003'), 2);

        $this->assertEquals(true, $result->isSuccess());

        $lastRequest = $mockClient->getLastRequest();
        $lastRequest->getBody()->rewind();

        $this->assertEquals(
            [
                'query' => 'mutation($input:S_API_UpdateAuctionInput!) { S_updateAuction(input:$input) { actionId, isSuccessful } }',
                'variables' => [
                    'input' => [
                        'id' => '8f6f8e56-fe80-11eb-9a03-0242ac130003',
                        'declaredStock' => 2,
                    ],
                ],
            ],
            json_decode($lastRequest->getBody()->getContents(), true)
        );
    }

    public function testRegisterCallback(): void
    {
        $mockClient = new MockClient();
        $mockClient->addResponse($this->getMockResponse(json_encode([
            'data' => [
                'P_registerCallback' => [
                    'isSuccessful' => true,
                ],
            ],
        ])));

        $client = $this->createEnebaClient($mockClient);
        $result = $client->registerCallback(new Callback(
            CallbackTypeEnum::DECLARED_STOCK_RESERVATION(),
            'https://google.com',
            'auth'
        ));

        $this->assertEquals(true, $result->isSuccess());

        $lastRequest = $mockClient->getLastRequest();
        $lastRequest->getBody()->rewind();

        $this->assertEquals(
            [
                'query' => 'mutation($input:P_API_RegisterCallbackInput!) { P_registerCallback(input:$input) { actionId, isSuccessful } }',
                'variables' => [
                    'input' => [
                        'type' => 'DECLARED_STOCK_RESERVATION',
                        'url' => 'https://google.com',
                        'authorization' => 'auth',
                    ],
                ],
            ],
            json_decode($lastRequest->getBody()->getContents(), true)
        );
    }

    /**
     * @param string $contents
     * @return ResponseInterface|MockObject
     */
    private function getMockResponse(string $contents): MockObject
    {
        $mockBody = $this->createMock(StreamInterface::class);
        $mockBody->expects($this->atLeastOnce())->method('__toString')->willReturn($contents);

        $mockResponse = $this->createMock(ResponseInterface::class);
        $mockResponse->expects($this->atLeastOnce())->method('getBody')->willReturn($mockBody);
        $mockResponse->expects($this->atLeastOnce())->method('getHeader')
            ->with('Content-Type')
            ->willReturn(['application/json'])
        ;

        $mockResponse->expects($this->atLeastOnce())->method('getStatusCode')->willReturn(200);

        return $mockResponse;
    }

    private function createEnebaClient(MockClient $mockClient): EnebaClient
    {
        $credentials = new ClientCredentials('id', 'secret');

        $tokenStorage = new ArrayAccessTokenStorage();
        $tokenStorage->set('token', new DateTime('+1 day'));

        return new EnebaClient(
            $credentials,
            $mockClient,
            null,
            null,
            null,
            $tokenStorage
        );
    }
}
