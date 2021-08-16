<?php

declare(strict_types=1);

namespace Helis\EnebaClient\Denormalizer\Object;

use Helis\EnebaClient\Denormalizer\NormalizerInterface;
use Helis\EnebaClient\Model\DeclaredStock\ProvidedKey;

class ProvidedKeyDenormalizer implements NormalizerInterface
{
    /**
     * @param ProvidedKey $data
     */
    public function normalize($data): array
    {
        $out = [
            'type' => $data->getType()->getKey(),
            'value' => $data->getValue(),
        ];

        if ($data->getFilename() !== null) {
            $out['filename'] = $data->getFilename();
        }

        return $out;
    }

    public function supportsNormalization(string $class): bool
    {
        return $class === ProvidedKey::class;
    }
}
