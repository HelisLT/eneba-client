<?php

declare(strict_types=1);

namespace Helis\EnebaClient\Denormalizer\Object;

use Helis\EnebaClient\Denormalizer\NormalizerInterface;
use Helis\EnebaClient\Model\Input\Callback;

class CallbackDenormalizer implements NormalizerInterface
{
    /**
     * @param Callback $data
     */
    public function normalize($data): array
    {
        return [
            'type' => $data->getType()->getKey(),
            'url' => $data->getUrl(),
            'authorization' => $data->getAuthorization(),
        ];
    }

    public function supportsNormalization(string $class): bool
    {
        return $class === Callback::class;
    }
}
