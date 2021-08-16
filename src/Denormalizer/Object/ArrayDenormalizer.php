<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Denormalizer\Object;

use Helis\EnebaClient\Denormalizer\DenormalizerAwareInterface;
use Helis\EnebaClient\Denormalizer\DenormalizerAwareTrait;
use Helis\EnebaClient\Denormalizer\DenormalizerInterface;
use Helis\EnebaClient\Denormalizer\NormalizerAwareInterface;
use Helis\EnebaClient\Denormalizer\NormalizerAwareTrait;
use Helis\EnebaClient\Denormalizer\NormalizerInterface;

class ArrayDenormalizer implements
    DenormalizerInterface,
    DenormalizerAwareInterface,
    NormalizerInterface,
    NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

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

    public function normalize($data)
    {
        $out = [];
        foreach ($data as $item) {
            $out[] = $this->normalizer->normalize($item);
        }

        return $out;
    }

    public function supportsNormalization(string $class): bool
    {
        if ($this->isArrayClass($class)) {
            return $this->normalizer->supportsNormalization($this->getItemClass($class));
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
