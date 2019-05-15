<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Model;

use DateTimeInterface;
use Helis\EnebaClient\Model\Relay\Connection\AuctionConnection;
use Ramsey\Uuid\UuidInterface;

class Product
{
    private $id;
    private $name;
    private $slug;
    private $platform;
    private $releasedAt;

    /**
     * @var AuctionConnection|null
     */
    private $auctions;

    public function __construct(
        UuidInterface $id,
        string $name,
        string $slug,
        string $platform,
        ?DateTimeInterface $releasedAt
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->slug = $slug;
        $this->platform = $platform;
        $this->releasedAt = $releasedAt;
    }

    public function getId(): UuidInterface
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function getPlatform(): string
    {
        return $this->platform;
    }

    public function getReleasedAt(): ?DateTimeInterface
    {
        return $this->releasedAt;
    }

    public function getAuctions(): ?AuctionConnection
    {
        return $this->auctions;
    }

    public function setAuctions(?AuctionConnection $auctions): void
    {
        $this->auctions = $auctions;
    }
}
