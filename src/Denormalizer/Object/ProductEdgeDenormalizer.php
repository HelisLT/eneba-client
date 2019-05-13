<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Denormalizer\Object;

use Helis\EnebaClient\Denormalizer\DenormalizerAwareInterface;
use Helis\EnebaClient\Denormalizer\DenormalizerAwareTrait;
use Helis\EnebaClient\Denormalizer\DenormalizerInterface;
use Helis\EnebaClient\Model\Product;
use Helis\EnebaClient\Model\Relay\Edge\ProductEdge;

class ProductEdgeDenormalizer implements DenormalizerInterface, DenormalizerAwareInterface
{
    use DenormalizerAwareTrait;

    public function denormalize($data, string $class): ProductEdge
    {
        return new ProductEdge(
            $data['cursor'],
            $this->denormalizer->denormalize($data['node'], Product::class)
        );
    }

    public function supportsDenormalization(string $class): bool
    {
        return $class === ProductEdge::class;
    }
}
