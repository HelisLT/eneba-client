<?php
declare(strict_types=1);

namespace Helis\EnebaClient;

use Helis\EnebaClient\Enum\FeeTypeEnum;
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
use Money\Money;
use Ramsey\Uuid\UuidInterface;

interface ClientInterface
{
    public function getSales(?SalesFilter $filter = null): SalesConnection;

    public function getStock(?StockFilter $filter = null): StockConnection;

    public function getProducts(?ProductsFilter $filter = null): ProductConnection;

    public function getProduct(UuidInterface $productId): ?Product;

    public function updateAuction(UuidInterface $auctionId, Money $price): ActionResponse;

    public function getActionState(UuidInterface $actionId): ?ActionState;

    /**
     * @param string[] $keys
     */
    public function addKeysToAuction(UuidInterface $auctionId, array $keys): ActionResponse;

    /**
     * @param UuidInterface[] $keysIds
     */
    public function removeKeysFromAuction(UuidInterface $auctionId, array $keysIds): ActionResponse;

    public function getAuctionKeys(UuidInterface $auctionId, ?KeysFilter $filter = null): KeyConnection;

    public function getFee(FeeTypeEnum $feeType): ?Money;
}
