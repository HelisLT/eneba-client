<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Model;

class PriceUpdateQuota
{
    private $quote;
    private $totalFree;
    private $nextFreeIn;

    public function __construct(int $quote, int $totalFree, ?int $nextFreeIn)
    {
        $this->quote = $quote;
        $this->totalFree = $totalFree;
        $this->nextFreeIn = $nextFreeIn;
    }

    public function getQuote(): int
    {
        return $this->quote;
    }

    public function getTotalFree(): int
    {
        return $this->totalFree;
    }

    public function getNextFreeIn(): ?int
    {
        return $this->nextFreeIn;
    }
}
