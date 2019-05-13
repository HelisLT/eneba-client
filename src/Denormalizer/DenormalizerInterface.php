<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Denormalizer;

interface DenormalizerInterface
{
    public function denormalize($data, string $class);

    public function supportsDenormalization(string $class): bool;
}
