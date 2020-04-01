<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Denormalizer\Object;

use Helis\EnebaClient\Denormalizer\DenormalizerInterface;
use Helis\EnebaClient\Model\PriceUpdateQuota;

class PriceUpdateQuotaDenormalizer implements DenormalizerInterface
{
    public function denormalize($data, string $class): PriceUpdateQuota
    {
        return new PriceUpdateQuota(
            $data['quota'],
            $data['totalFree'],
            $data['nextFreeIn']
        );
    }

    public function supportsDenormalization(string $class): bool
    {
        return $class === PriceUpdateQuota::class;
    }
}
