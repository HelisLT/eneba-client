<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Denormalizer\Object;

use Helis\EnebaClient\Denormalizer\DenormalizerAwareInterface;
use Helis\EnebaClient\Denormalizer\DenormalizerAwareTrait;
use Helis\EnebaClient\Denormalizer\DenormalizerInterface;
use Helis\EnebaClient\Model\Auction;
use Money\Money;

class AuctionDenormalizer implements DenormalizerInterface, DenormalizerAwareInterface
{
    use DenormalizerAwareTrait;

    public function denormalize($data, string $class): Auction
    {
        return new Auction(
            $this->denormalizer->denormalize($data['price'], Money::class),
            $data['isInStock'],
            $data['merchantName']
        );
    }

    public function supportsDenormalization(string $class): bool
    {
        return $class === Auction::class;
    }
}
