<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Denormalizer\Object;

use Helis\EnebaClient\Denormalizer\DenormalizerAwareInterface;
use Helis\EnebaClient\Denormalizer\DenormalizerAwareTrait;
use Helis\EnebaClient\Denormalizer\DenormalizerInterface;
use Helis\EnebaClient\Model\DeclaredStock\ReservationAuctionEntry;
use Money\Money;
use Ramsey\Uuid\Uuid;

class ReservedAuctionEntryDenormalizer implements DenormalizerInterface, DenormalizerAwareInterface
{
    use DenormalizerAwareTrait;

    public function denormalize($data, string $class): ReservationAuctionEntry
    {
        return new ReservationAuctionEntry(
            (int) $data['keyCount'],
            Uuid::fromString($data['auctionId']),
            $this->denormalizer->denormalize($data['price'], Money::class)
        );
    }

    public function supportsDenormalization(string $class): bool
    {
        return $class === ReservationAuctionEntry::class;
    }
}
