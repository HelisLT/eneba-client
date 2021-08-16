<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Denormalizer;

interface NormalizerInterface
{
    /**
     * @return mixed
     */
    public function normalize($data);

    public function supportsNormalization(string $class): bool;
}
