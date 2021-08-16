<?php

declare(strict_types=1);

namespace Helis\EnebaClient\Tests;

use Helis\EnebaClient\Enum\CallbackTypeEnum;
use Helis\EnebaClient\Enum\DeclaredStockActionEnum;
use Helis\EnebaClient\Enum\KeyFormatEnum;
use Helis\EnebaClient\Model\DeclaredStock\ProvidedKey;
use Helis\EnebaClient\Model\DeclaredStock\ProvisionAuctionEntry;
use Helis\EnebaClient\Model\DeclaredStock\ProvisionRequest;
use Helis\EnebaClient\Model\DeclaredStock\ProvisionResponse;
use Helis\EnebaClient\Model\DeclaredStock\ReservationAuctionEntry;
use Helis\EnebaClient\Model\DeclaredStock\ReservationRequest;
use Helis\EnebaClient\Model\DeclaredStock\ReservationResponse;
use Helis\EnebaClient\Model\Input\Callback;
use Money\Currency;
use Money\Money;
use PHPUnit\Framework\TestCase;
use Helis\EnebaClient\Denormalizer\Denormalizer;
use Ramsey\Uuid\Uuid;

class DenormalizerTest extends TestCase
{
    private $denormalizer;

    protected function setUp(): void
    {
        $this->denormalizer = Denormalizer::getInstance();
    }

    /**
     * @dataProvider dataProviderTestNormalization
     */
    public function testNormalization($data, array $expectation): void
    {
        $result = $this->denormalizer->normalize($data);
        $this->assertEquals($expectation, $result);
    }

    /**
     * @dataProvider dataProviderTestDenormalization
     */
    public function testDenormalization(array $data, string $class, $expectation): void
    {
        $result = $this->denormalizer->denormalize($data, $class);
        $this->assertEquals($expectation, $result);
    }

    public function dataProviderTestDenormalization(): array
    {
        return [
            'Reservation request' => [
                [
                    'action' => DeclaredStockActionEnum::RESERVE()->getKey(),
                    'orderId' => 'c0f0be12-fe7d-11eb-9a03-0242ac130003',
                    'auctions' => [
                        [
                            'keyCount' => 2,
                            'auctionId' => 'f13c313c-fe7d-11eb-9a03-0242ac130003',
                            'price' => ['amount' => 100, 'currency' => 'EUR'],
                        ],
                    ],
                ],
                ReservationRequest::class,
                new ReservationRequest(
                    DeclaredStockActionEnum::RESERVE(),
                    Uuid::fromString('c0f0be12-fe7d-11eb-9a03-0242ac130003'),
                    [
                        new ReservationAuctionEntry(
                            2,
                            Uuid::fromString('f13c313c-fe7d-11eb-9a03-0242ac130003'),
                            new Money(100, new Currency('EUR'))
                        ),
                    ]
                ),
            ],
            'Provision request' => [
                [
                    'action' => DeclaredStockActionEnum::PROVIDE()->getKey(),
                    'orderId' => 'c0f0be12-fe7d-11eb-9a03-0242ac130003',
                ],
                ProvisionRequest::class,
                new ProvisionRequest(
                    Uuid::fromString('c0f0be12-fe7d-11eb-9a03-0242ac130003'),
                    DeclaredStockActionEnum::PROVIDE()
                ),
            ],
        ];
    }

    public function dataProviderTestNormalization(): array
    {
        return [
            'Callback' => [
                new Callback(CallbackTypeEnum::DECLARED_STOCK_RESERVATION(), 'https://google.com', 'auth'),
                [
                    'type' => CallbackTypeEnum::DECLARED_STOCK_RESERVATION()->getKey(),
                    'url' => 'https://google.com',
                    'authorization' => 'auth',
                ]
            ],
            'Reservation response' => [
                new ReservationResponse(
                    Uuid::fromString('c0f0be12-fe7d-11eb-9a03-0242ac130003'),
                    true
                ),
                [
                    'action' => DeclaredStockActionEnum::RESERVE()->getKey(),
                    'orderId' => 'c0f0be12-fe7d-11eb-9a03-0242ac130003',
                    'success' => true,
                ]
            ],
            'Provision response' => [
                new ProvisionResponse(
                    Uuid::fromString('c0f0be12-fe7d-11eb-9a03-0242ac130003'),
                    true,
                    [
                        new ProvisionAuctionEntry(
                            Uuid::fromString('f13c313c-fe7d-11eb-9a03-0242ac130003'),
                            [
                                new ProvidedKey(KeyFormatEnum::TEXT(), 'key-1', null),
                                new ProvidedKey(KeyFormatEnum::IMAGE(), 'key-2', 'image.jpg'),
                            ]
                        )
                    ]
                ),
                [
                    'action' => DeclaredStockActionEnum::PROVIDE()->getKey(),
                    'orderId' => 'c0f0be12-fe7d-11eb-9a03-0242ac130003',
                    'success' => true,
                    'auctions' => [
                        [
                            'auctionId' => 'f13c313c-fe7d-11eb-9a03-0242ac130003',
                            'keys' => [
                                [
                                    'type' => KeyFormatEnum::TEXT()->getKey(),
                                    'value' => 'key-1',
                                ],
                                [
                                    'type' => KeyFormatEnum::IMAGE()->getKey(),
                                    'value' => 'key-2',
                                    'filename' => 'image.jpg',
                                ],
                            ]
                        ]
                    ],
                ],
            ]
        ];
    }
}
