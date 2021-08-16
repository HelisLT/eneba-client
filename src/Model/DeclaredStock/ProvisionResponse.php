<?php

declare(strict_types=1);

namespace Helis\EnebaClient\Model\DeclaredStock;

use Helis\EnebaClient\Enum\DeclaredStockActionEnum;
use Ramsey\Uuid\UuidInterface;

class ProvisionResponse
{
    private $action;
    private $orderId;
    private $success;
    private $auctions;

    /**
     * @param ProvisionAuctionEntry[] $auctions
     */
    public function __construct(UuidInterface $orderId, bool $success, array $auctions)
    {
        $this->action = DeclaredStockActionEnum::PROVIDE();
        $this->orderId = $orderId;
        $this->success = $success;
        $this->auctions = $auctions;
    }

    public function getOrderId(): UuidInterface
    {
        return $this->orderId;
    }

    public function setOrderId(UuidInterface $orderId): void
    {
        $this->orderId = $orderId;
    }

    public function isSuccess(): ?bool
    {
        return $this->success;
    }

    public function setSuccess(bool $success): void
    {
        $this->success = $success;
    }

    public function getAction(): DeclaredStockActionEnum
    {
        return $this->action;
    }

    public function setAction(DeclaredStockActionEnum $action): void
    {
        $this->action = $action;
    }

    /**
     * @return ProvisionAuctionEntry[]
     */
    public function getAuctions(): array
    {
        return $this->auctions;
    }

    /**
     * @param ProvisionAuctionEntry[] $auctions
     */
    public function setAuctions(array $auctions): void
    {
        $this->auctions = $auctions;
    }
}
