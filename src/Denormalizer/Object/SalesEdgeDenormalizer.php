<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Denormalizer\Object;

use Helis\EnebaClient\Denormalizer\DenormalizerAwareInterface;
use Helis\EnebaClient\Denormalizer\DenormalizerAwareTrait;
use Helis\EnebaClient\Denormalizer\DenormalizerInterface;
use Helis\EnebaClient\Model\Relay\Edge\SalesEdge;
use Helis\EnebaClient\Model\Sales;

class SalesEdgeDenormalizer implements DenormalizerInterface, DenormalizerAwareInterface
{
    use DenormalizerAwareTrait;

    public function denormalize($data, string $class): SalesEdge
    {
        return new SalesEdge(
            $data['cursor'],
            $this->denormalizer->denormalize($data['node'], Sales::class)
        );
    }

    public function supportsDenormalization(string $class): bool
    {
        return $class === SalesEdge::class;
    }
}
