<?php

declare(strict_types=1);

namespace Helis\EnebaClient\Denormalizer\Object;

use Helis\EnebaClient\Denormalizer\NormalizerAwareInterface;
use Helis\EnebaClient\Denormalizer\NormalizerAwareTrait;
use Helis\EnebaClient\Denormalizer\NormalizerInterface;
use Helis\EnebaClient\Model\DeclaredStock\ProvisionResponse;

class ProvisionResponseDenormalizer implements NormalizerInterface, NormalizerAwareInterface
{
    use NormalizerAwareTrait;

    /**
     * @param ProvisionResponse $data
     */
    public function normalize($data): array
    {
        return [
            'action' => $data->getAction()->getKey(),
            'orderId' => $data->getOrderId(),
            'success' => $data->isSuccess(),
            'auctions' => $this->normalizer->normalize($data->getAuctions()),
        ];
    }

    public function supportsNormalization(string $class): bool
    {
        return $class === ProvisionResponse::class;
    }
}
