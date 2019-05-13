<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Denormalizer\Object;

use Helis\EnebaClient\Denormalizer\DenormalizerAwareInterface;
use Helis\EnebaClient\Denormalizer\DenormalizerAwareTrait;
use Helis\EnebaClient\Denormalizer\DenormalizerInterface;
use Helis\EnebaClient\Model\Relay\Edge\StockEdge;
use Helis\EnebaClient\Model\Stock;

class StockEdgeDenormalizer implements DenormalizerInterface, DenormalizerAwareInterface
{
    use DenormalizerAwareTrait;

    public function denormalize($data, string $class): StockEdge
    {
        return new StockEdge(
            $data['cursor'],
            $this->denormalizer->denormalize($data['node'], Stock::class)
        );
    }

    public function supportsDenormalization(string $class): bool
    {
        return $class === StockEdge::class;
    }
}
