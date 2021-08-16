<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Denormalizer;

trait NormalizerAwareTrait
{
    /**
     * @var NormalizerInterface
     */
    protected $normalizer;

    public function setNormalizer(NormalizerInterface $normalizer): void
    {
        $this->normalizer = $normalizer;
    }
}
