<?php

declare(strict_types=1);

namespace Helis\EnebaClient\Model\DeclaredStock;

use Helis\EnebaClient\Enum\DeclaredStockActionEnum;
use Ramsey\Uuid\UuidInterface;

class ProvisionRequest
{
    private $orderId;
    private $action;

    public function __construct(UuidInterface $orderId, DeclaredStockActionEnum $action)
    {
        $this->orderId = $orderId;
        $this->action = $action;
    }

    public function getOrderId(): ?UuidInterface
    {
        return $this->orderId;
    }

    public function setOrderId(UuidInterface $orderId): void
    {
        $this->orderId = $orderId;
    }

    public function getAction(): DeclaredStockActionEnum
    {
        return $this->action;
    }

    public function setAction(DeclaredStockActionEnum $action): void
    {
        $this->action = $action;
    }
}
