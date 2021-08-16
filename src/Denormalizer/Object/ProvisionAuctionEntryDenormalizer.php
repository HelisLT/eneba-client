<?php

declare(strict_types=1);

namespace Helis\EnebaClient\Denormalizer\Object;

use Helis\EnebaClient\Denormalizer\NormalizerAwareInterface;
use Helis\EnebaClient\Denormalizer\NormalizerAwareTrait;
use Helis\EnebaClient\Denormalizer\NormalizerInterface;
use Helis\EnebaClient\Model\DeclaredStock\ProvisionAuctionEntry;

class ProvisionAuctionEntryDenormalizer implements NormalizerInterface, NormalizerAwareInterface
{
    use NormalizerAwareTrait;

    /**
     * @param ProvisionAuctionEntry $data
     */
    public function normalize($data): array
    {
        return [
            'auctionId' => $data->getAuctionId()->toString(),
            'keys' => $this->normalizer->normalize($data->getKeys()),
        ];
    }

    public function supportsNormalization(string $class): bool
    {
        return $class === ProvisionAuctionEntry::class;
    }
}
