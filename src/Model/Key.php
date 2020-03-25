<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Model;

use DateTimeInterface;
use Helis\EnebaClient\Enum\KeyFormatEnum;
use Helis\EnebaClient\Enum\KeyStateEnum;
use Money\Money;
use Ramsey\Uuid\UuidInterface;

class Key
{
    private $id;
    private $value;
    private $orderNumber;
    private $state;
    private $createdAt;
    private $soldAt;
    private $acquisitionPrice;
    private $format;
    private $filename;
    private $reportReason;
    private $deletable;

    public function __construct(
        UuidInterface $id,
        ?string $value,
        ?string $orderNumber,
        KeyStateEnum $state,
        DateTimeInterface $createdAt,
        ?DateTimeInterface $soldAt,
        ?Money $acquisitionPrice,
        ?KeyFormatEnum $format,
        ?string $filename,
        ?string $reportReason,
        bool $deletable
    ) {
        $this->id = $id;
        $this->value = $value;
        $this->orderNumber = $orderNumber;
        $this->state = $state;
        $this->createdAt = $createdAt;
        $this->soldAt = $soldAt;
        $this->acquisitionPrice = $acquisitionPrice;
        $this->format = $format;
        $this->filename = $filename;
        $this->reportReason = $reportReason;
        $this->deletable = $deletable;
    }

    public function getId(): UuidInterface
    {
        return $this->id;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function getOrderNumber(): ?string
    {
        return $this->orderNumber;
    }

    public function getState(): KeyStateEnum
    {
        return $this->state;
    }

    public function getCreatedAt(): DateTimeInterface
    {
        return $this->createdAt;
    }

    public function getSoldAt(): ?DateTimeInterface
    {
        return $this->soldAt;
    }

    public function getAcquisitionPrice(): ?Money
    {
        return $this->acquisitionPrice;
    }

    public function getFormat(): ?KeyFormatEnum
    {
        return $this->format;
    }

    public function getFilename(): ?string
    {
        return $this->filename;
    }

    public function getReportReason(): ?string
    {
        return $this->reportReason;
    }

    public function isDeletable(): bool
    {
        return $this->deletable;
    }
}
