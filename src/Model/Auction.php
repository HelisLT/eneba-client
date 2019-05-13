<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Model;

use Money\Money;

class Auction
{
    private $price;
    private $isInStock;
    private $merchantName;

    public function __construct(Money $price, bool $isInStock, string $merchantName)
    {
        $this->price = $price;
        $this->isInStock = $isInStock;
        $this->merchantName = $merchantName;
    }

    public function getPrice(): Money
    {
        return $this->price;
    }

    public function isInStock(): bool
    {
        return $this->isInStock;
    }

    public function getMerchantName(): string
    {
        return $this->merchantName;
    }
}
