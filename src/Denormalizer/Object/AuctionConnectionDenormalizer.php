<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Denormalizer\Object;

use Helis\EnebaClient\Denormalizer\DenormalizerAwareInterface;
use Helis\EnebaClient\Denormalizer\DenormalizerAwareTrait;
use Helis\EnebaClient\Denormalizer\DenormalizerInterface;
use Helis\EnebaClient\Model\Relay\Connection\AuctionConnection;
use Helis\EnebaClient\Model\Relay\Connection\PageInfo;
use Helis\EnebaClient\Model\Relay\Edge\AuctionEdge;

class AuctionConnectionDenormalizer implements DenormalizerInterface, DenormalizerAwareInterface
{
    use DenormalizerAwareTrait;

    public function denormalize($data, string $class): AuctionConnection
    {
        return new AuctionConnection(
            $this->denormalizer->denormalize($data['edges'], AuctionEdge::class . '[]'),
            $this->denormalizer->denormalize($data['pageInfo'], PageInfo::class),
            $data['totalCount']
        );
    }

    public function supportsDenormalization(string $class): bool
    {
        return $class === AuctionConnection::class;
    }
}
