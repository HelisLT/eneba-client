<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Model;

use Ramsey\Uuid\UuidInterface;

class ActionState
{
    protected $id;
    protected $state;

    public function __construct(UuidInterface $id, string $state)
    {
        $this->id = $id;
        $this->state = $state;
    }

    public function getId(): UuidInterface
    {
        return $this->id;
    }

    public function getState(): string
    {
        return $this->state;
    }
}
