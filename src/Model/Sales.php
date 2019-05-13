<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Model;

use DateTime;
use Money\Money;
use Ramsey\Uuid\UuidInterface;

class Sales
{
    private $id;
    private $quantity;
    private $unitPrice;
    private $totalPrice;
    private $auctionId;
    private $createdAt;
    private $productName;
    private $productId;
    private $keys;

    /**
     * @param string[] $keys
     */
    public function __construct(
        UuidInterface $id,
        DateTime $createdAt,
        int $quantity,
        Money $unitPrice,
        Money $totalPrice,
        UuidInterface $auctionId,
        UuidInterface $productId,
        string $productName,
        array $keys
    ) {
        $this->id = $id;
        $this->quantity = $quantity;
        $this->unitPrice = $unitPrice;
        $this->totalPrice = $totalPrice;
        $this->auctionId = $auctionId;
        $this->createdAt = $createdAt;
        $this->productName = $productName;
        $this->productId = $productId;
        $this->keys = $keys;
    }

    public function getProductId(): UuidInterface
    {
        return $this->productId;
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    public function getProductName(): string
    {
        return $this->productName;
    }

    public function getId(): UuidInterface
    {
        return $this->id;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function getUnitPrice(): Money
    {
        return $this->unitPrice;
    }

    public function getTotalPrice(): Money
    {
        return $this->totalPrice;
    }

    public function getAuctionId(): UuidInterface
    {
        return $this->auctionId;
    }

    /**
     * @return string[]
     */
    public function getKeys(): array
    {
        return $this->keys;
    }
}
