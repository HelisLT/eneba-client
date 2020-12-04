<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Model\Input;

use Money\Currency;

class ProductsFilter extends PaginationFilter
{
    /**
     * @var bool|null
     */
    private $onlyUnmapped;

    /**
     * @var string|null
     */
    private $search;

    /**
     * @var Currency|null
     */
    private $currency;

    public function getOnlyUnmapped(): ?bool
    {
        return $this->onlyUnmapped;
    }

    public function setOnlyUnmapped(?bool $onlyUnmapped): void
    {
        $this->onlyUnmapped = $onlyUnmapped;
    }

    public function getSearch(): ?string
    {
        return $this->search;
    }

    public function setSearch(?string $search): void
    {
        $this->search = $search;
    }

    public function getCurrency(): ?Currency
    {
        return $this->currency;
    }

    public function setCurrency(?Currency $currency): void
    {
        $this->currency = $currency;
    }
}
