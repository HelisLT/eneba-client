<?php

declare(strict_types=1);

namespace Helis\EnebaClient\Model\DeclaredStock;

use Helis\EnebaClient\Enum\DeclaredStockActionEnum;
use Ramsey\Uuid\UuidInterface;

class ReservationResponse
{
    private $action;
    private $orderId;
    private $success;

    public function __construct(UuidInterface $orderId, bool $success)
    {
        $this->action = DeclaredStockActionEnum::RESERVE();
        $this->orderId = $orderId;
        $this->success = $success;
    }

    public function getOrderId(): UuidInterface
    {
        return $this->orderId;
    }

    public function setOrderId(UuidInterface $orderId): void
    {
        $this->orderId = $orderId;
    }

    public function isSuccess(): bool
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
}
