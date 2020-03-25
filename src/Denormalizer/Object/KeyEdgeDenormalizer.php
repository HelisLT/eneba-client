<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Denormalizer\Object;

use Helis\EnebaClient\Denormalizer\DenormalizerAwareInterface;
use Helis\EnebaClient\Denormalizer\DenormalizerAwareTrait;
use Helis\EnebaClient\Denormalizer\DenormalizerInterface;
use Helis\EnebaClient\Model\Key;
use Helis\EnebaClient\Model\Relay\Edge\KeyEdge;

class KeyEdgeDenormalizer implements DenormalizerInterface, DenormalizerAwareInterface
{
    use DenormalizerAwareTrait;

    public function denormalize($data, string $class): KeyEdge
    {
        return new KeyEdge(
            $data['cursor'],
            $this->denormalizer->denormalize($data['node'], Key::class)
        );
    }

    public function supportsDenormalization(string $class): bool
    {
        return $class === KeyEdge::class;
    }
}
