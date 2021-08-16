<?php

declare(strict_types=1);

namespace Helis\EnebaClient\Model\DeclaredStock;

use Ramsey\Uuid\UuidInterface;

class ProvisionAuctionEntry
{
    private $auctionId;
    private $keys;

    /**
     * @param ProvidedKey[] $keys
     */
    public function __construct(UuidInterface $auctionId, array $keys)
    {
        $this->auctionId = $auctionId;
        $this->keys = $keys;
    }

    public function getAuctionId(): UuidInterface
    {
        return $this->auctionId;
    }

    public function setAuctionId(UuidInterface $auctionId): void
    {
        $this->auctionId = $auctionId;
    }

    /**
     * @return ProvidedKey[]
     */
    public function getKeys(): array
    {
        return $this->keys;
    }

    /**
     * @param ProvidedKey[] $keys
     */
    public function setKeys(array $keys): void
    {
        $this->keys = $keys;
    }
}
