<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Denormalizer;

interface NormalizerAwareInterface
{
    public function setNormalizer(NormalizerInterface $normalizer): void;
}
