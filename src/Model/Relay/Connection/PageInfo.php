<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Model\Relay\Connection;

class PageInfo
{
    protected $startCursor;
    protected $endCursor;
    protected $hasPreviousPage;
    protected $hasNextPage;

    public function __construct(?string $startCursor, ?string $endCursor, bool $hasPreviousPage, bool $hasNextPage)
    {
        $this->startCursor = $startCursor;
        $this->endCursor = $endCursor;
        $this->hasPreviousPage = $hasPreviousPage;
        $this->hasNextPage = $hasNextPage;
    }

    public function getStartCursor(): ?string
    {
        return $this->startCursor;
    }

    public function getEndCursor(): ?string
    {
        return $this->endCursor;
    }

    public function isHasPreviousPage(): bool
    {
        return $this->hasPreviousPage;
    }

    public function isHasNextPage(): bool
    {
        return $this->hasNextPage;
    }
}
