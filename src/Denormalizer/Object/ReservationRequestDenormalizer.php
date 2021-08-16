<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Denormalizer\Object;

use Helis\EnebaClient\Denormalizer\DenormalizerAwareInterface;
use Helis\EnebaClient\Denormalizer\DenormalizerAwareTrait;
use Helis\EnebaClient\Denormalizer\DenormalizerInterface;
use Helis\EnebaClient\Enum\DeclaredStockActionEnum;
use Helis\EnebaClient\Model\DeclaredStock\ReservationAuctionEntry;
use Helis\EnebaClient\Model\DeclaredStock\ReservationRequest;
use Ramsey\Uuid\Uuid;

class ReservationRequestDenormalizer implements DenormalizerInterface, DenormalizerAwareInterface
{
    use DenormalizerAwareTrait;

    public function denormalize($data, string $class): ReservationRequest
    {
        return new ReservationRequest(
            DeclaredStockActionEnum::{$data['action']}(),
            Uuid::fromString($data['orderId']),
            $this->denormalizer->denormalize($data['auctions'], ReservationAuctionEntry::class . '[]')
        );
    }

    public function supportsDenormalization(string $class): bool
    {
        return $class === ReservationRequest::class;
    }
}
