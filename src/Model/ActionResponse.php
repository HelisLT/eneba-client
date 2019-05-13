<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Model;

use Ramsey\Uuid\UuidInterface;

class ActionResponse
{
    private $success;
    private $actionId;

    public function __construct(bool $success, ?UuidInterface $actionId = null)
    {
        $this->success = $success;
        $this->actionId = $actionId;
    }

    public function isSuccess(): bool
    {
        return $this->success;
    }

    public function getActionId(): ?UuidInterface
    {
        return $this->actionId;
    }
}
