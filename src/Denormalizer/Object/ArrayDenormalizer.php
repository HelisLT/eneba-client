<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Denormalizer\Object;

use Helis\EnebaClient\Denormalizer\DenormalizerAwareInterface;
use Helis\EnebaClient\Denormalizer\DenormalizerAwareTrait;
use Helis\EnebaClient\Denormalizer\DenormalizerInterface;

class ArrayDenormalizer implements DenormalizerInterface, DenormalizerAwareInterface
{
    use DenormalizerAwareTrait;

    public function denormalize($data, string $class): array
    {
        $out = [];
        $baseClass = $this->getItemClass($class);
        foreach ($data as $item) {
            $out[] = $this->denormalizer->denormalize($item, $baseClass);
        }

        return $out;
    }

    public function supportsDenormalization(string $class): bool
    {
        if ($this->isArrayClass($class)) {
            return $this->denormalizer->supportsDenormalization($this->getItemClass($class));
        }

        return false;
    }

    private function isArrayClass(string $class): bool
    {
        return substr($class, -2) === '[]';
    }

    private function getItemClass(string $class): string
    {
        return substr($class, 0, -2);
    }
}
