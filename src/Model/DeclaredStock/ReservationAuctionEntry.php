<?php

declare(strict_types=1);

namespace Helis\EnebaClient\Model\DeclaredStock;

use Money\Money;
use Ramsey\Uuid\UuidInterface;

class ReservationAuctionEntry
{
    private $keyCount;
    private $auctionId;
    private $price;

    public function __construct(int $keyCount, UuidInterface $auctionId, Money $price)
    {
        $this->keyCount = $keyCount;
        $this->auctionId = $auctionId;
        $this->price = $price;
    }

    public function getAuctionId(): UuidInterface
    {
        return $this->auctionId;
    }

    public function setAuctionId(UuidInterface $auctionId): void
    {
        $this->auctionId = $auctionId;
    }

    public function getKeyCount(): int
    {
        return $this->keyCount;
    }

    public function setKeyCount(int $keyCount): void
    {
        $this->keyCount = $keyCount;
    }

    public function getPrice(): Money
    {
        return $this->price;
    }

    public function setPrice(Money $price): void
    {
        $this->price = $price;
    }
}
