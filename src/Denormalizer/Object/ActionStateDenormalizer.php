<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Denormalizer\Object;

use Helis\EnebaClient\Denormalizer\DenormalizerInterface;
use Helis\EnebaClient\Model\ActionState;
use Ramsey\Uuid\Uuid;

class ActionStateDenormalizer implements DenormalizerInterface
{
    public function denormalize($data, string $class): ActionState
    {
        return new ActionState(Uuid::fromString($data['id']), $data['state']);
    }

    public function supportsDenormalization(string $class): bool
    {
        return $class === ActionState::class;
    }
}
