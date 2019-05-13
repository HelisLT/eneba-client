<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Denormalizer\Object;

use Helis\EnebaClient\Denormalizer\DenormalizerAwareInterface;
use Helis\EnebaClient\Denormalizer\DenormalizerAwareTrait;
use Helis\EnebaClient\Denormalizer\DenormalizerInterface;
use Helis\EnebaClient\Model\Relay\Connection\PageInfo;
use Helis\EnebaClient\Model\Relay\Connection\ProductConnection;
use Helis\EnebaClient\Model\Relay\Edge\ProductEdge;

class ProductConnectionDenormalizer implements DenormalizerInterface, DenormalizerAwareInterface
{
    use DenormalizerAwareTrait;

    public function denormalize($data, string $class): ProductConnection
    {
        return new ProductConnection(
            $this->denormalizer->denormalize($data['edges'], ProductEdge::class . '[]'),
            $this->denormalizer->denormalize($data['pageInfo'], PageInfo::class),
            $data['totalCount']
        );
    }

    public function supportsDenormalization(string $class): bool
    {
        return $class === ProductConnection::class;
    }
}
