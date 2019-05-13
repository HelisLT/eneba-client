<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Denormalizer;

interface DenormalizerAwareInterface
{
    public function setDenormalizer(DenormalizerInterface $denormalizer): void;
}
