<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Denormalizer\Object;

use Helis\EnebaClient\Denormalizer\DenormalizerInterface;
use Helis\EnebaClient\Model\ActionResponse;
use Ramsey\Uuid\Uuid;

class ActionResponseDenormalizer implements DenormalizerInterface
{
    public function denormalize($data, string $class): ActionResponse
    {
        return new ActionResponse(
            $data['isSuccessful'],
            isset($data['actionId']) ? Uuid::fromString($data['actionId']) : null
        );
    }

    public function supportsDenormalization(string $class): bool
    {
        return $class === ActionResponse::class;
    }
}
