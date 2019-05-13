<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Model\Input;

use DateTime;
use Ramsey\Uuid\UuidInterface;

class SalesFilter extends PaginationFilter
{
    /**
     * @var DateTime|null
     */
    protected $dateFrom;

    /**
     * @var DateTime|null
     */
    protected $dateTo;

    /**
     * @var UuidInterface|null
     */
    protected $auctionId;

    public function getDateFrom(): ?DateTime
    {
        return $this->dateFrom;
    }

    public function setDateFrom(?DateTime $dateFrom): void
    {
        $this->dateFrom = $dateFrom;
    }

    public function getDateTo(): ?DateTime
    {
        return $this->dateTo;
    }

    public function setDateTo(?DateTime $dateTo): void
    {
        $this->dateTo = $dateTo;
    }

    public function getAuctionId(): ?UuidInterface
    {
        return $this->auctionId;
    }

    public function setAuctionId(?UuidInterface $auctionId): void
    {
        $this->auctionId = $auctionId;
    }
}
