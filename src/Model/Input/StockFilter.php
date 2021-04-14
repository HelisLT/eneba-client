<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Model\Input;

use Ramsey\Uuid\UuidInterface;

class StockFilter extends PaginationFilter
{
    protected $stockId;
    protected $productId;

    public function getStockId(): ?UuidInterface
    {
        return $this->stockId;
    }

    public function setStockId(?UuidInterface $stockId): void
    {
        $this->stockId = $stockId;
    }

    public function getProductId(): ?UuidInterface
    {
        return $this->productId;
    }

    public function setProductId(?UuidInterface $productId): void
    {
        $this->productId = $productId;
    }
}
