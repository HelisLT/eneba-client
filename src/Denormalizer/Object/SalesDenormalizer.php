<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Denormalizer\Object;

use DateTime;
use Helis\EnebaClient\Denormalizer\DenormalizerAwareInterface;
use Helis\EnebaClient\Denormalizer\DenormalizerAwareTrait;
use Helis\EnebaClient\Denormalizer\DenormalizerInterface;
use Helis\EnebaClient\Model\Sales;
use Money\Money;
use Ramsey\Uuid\Uuid;

class SalesDenormalizer implements DenormalizerInterface, DenormalizerAwareInterface
{
    use DenormalizerAwareTrait;

    public function denormalize($data, string $class): Sales
    {
        return new Sales(
            Uuid::fromString($data['id']),
            new DateTime($data['createdAt']),
            $data['quantity'],
            $this->denormalizer->denormalize($data['unitPrice'], Money::class),
            $this->denormalizer->denormalize($data['totalPrice'], Money::class),
            Uuid::fromString($data['auctionId']),
            Uuid::fromString($data['productId']),
            $data['productName'],
            $data['keys']
        );
    }

    public function supportsDenormalization(string $class): bool
    {
        return $class === Sales::class;
    }
}
