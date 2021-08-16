<?php

declare(strict_types=1);

namespace Helis\EnebaClient\Model\DeclaredStock;

use Helis\EnebaClient\Enum\DeclaredStockActionEnum;
use Ramsey\Uuid\UuidInterface;

class ReservationRequest
{
    private $action;
    private $orderId;
    private $auctions;

    /**
     * @param $auctions ReservationAuctionEntry[]
     */
    public function __construct(DeclaredStockActionEnum $action, UuidInterface $orderId, array $auctions)
    {
        $this->action = $action;
        $this->orderId = $orderId;
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

    public function getAction(): ?DeclaredStockActionEnum
    {
        return $this->action;
    }

    public function setAction(DeclaredStockActionEnum $action): void
    {
        $this->action = $action;
    }

    /**
     * @return ReservationAuctionEntry[]
     */
    public function getAuctions(): array
    {
        return $this->auctions;
    }

    /**
     * @param ReservationAuctionEntry[] $auctions
     */
    public function setAuctions(array $auctions): void
    {
        $this->auctions = $auctions;
    }
}
