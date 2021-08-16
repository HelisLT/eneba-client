<?php

declare(strict_types=1);

namespace Helis\EnebaClient\Denormalizer\Object;

use Helis\EnebaClient\Denormalizer\NormalizerInterface;
use Helis\EnebaClient\Model\DeclaredStock\ReservationResponse;

class ReservationResponseDenormalizer implements NormalizerInterface
{
    /**
     * @param ReservationResponse $data
     */
    public function normalize($data): array
    {
        return [
            'action' => $data->getAction()->getKey(),
            'orderId' => $data->getOrderId(),
            'success' => $data->isSuccess(),
        ];
    }

    public function supportsNormalization(string $class): bool
    {
        return $class === ReservationResponse::class;
    }
}
