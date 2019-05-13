<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Denormalizer\Object;

use Helis\EnebaClient\Denormalizer\DenormalizerAwareInterface;
use Helis\EnebaClient\Denormalizer\DenormalizerAwareTrait;
use Helis\EnebaClient\Denormalizer\DenormalizerInterface;
use Helis\EnebaClient\Model\Auction;
use Helis\EnebaClient\Model\Relay\Edge\AuctionEdge;

class AuctionEdgeDenormalizer implements DenormalizerInterface, DenormalizerAwareInterface
{
    use DenormalizerAwareTrait;

    public function denormalize($data, string $class): AuctionEdge
    {
        return new AuctionEdge(
            $data['cursor'],
            $this->denormalizer->denormalize($data['node'], Auction::class)
        );
    }

    public function supportsDenormalization(string $class): bool
    {
        return $class === AuctionEdge::class;
    }
}
