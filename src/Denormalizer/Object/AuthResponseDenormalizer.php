<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Denormalizer\Object;

use Helis\EnebaClient\Denormalizer\DenormalizerInterface;
use Helis\EnebaClient\Model\AccessToken;

class AuthResponseDenormalizer implements DenormalizerInterface
{
    public function denormalize($data, string $class): AccessToken
    {
        return new AccessToken(
            $data['access_token'],
            $data['expires_in']
        );
    }

    public function supportsDenormalization(string $class): bool
    {
        return $class === AccessToken::class;
    }
}
