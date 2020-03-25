<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Denormalizer\Object;

use DateTime;
use Helis\EnebaClient\Denormalizer\DenormalizerAwareInterface;
use Helis\EnebaClient\Denormalizer\DenormalizerAwareTrait;
use Helis\EnebaClient\Denormalizer\DenormalizerInterface;
use Helis\EnebaClient\Enum\KeyFormatEnum;
use Helis\EnebaClient\Enum\KeyStateEnum;
use Helis\EnebaClient\Model\Key;
use Money\Money;
use Ramsey\Uuid\Uuid;

class KeyDenormalizer implements DenormalizerInterface, DenormalizerAwareInterface
{
    use DenormalizerAwareTrait;

    public function denormalize($data, string $class): Key
    {
        return new Key(
            Uuid::fromString($data['id']),
            $data['value'],
            $data['orderNumber'],
            new KeyStateEnum($data['state']),
            new DateTime($data['createdAt']),
            $data['soldAt'] ? new DateTime($data['soldAt']) : null,
            $this->denormalizer->denormalize($data['acquisitionPrice'], Money::class),
            $data['format'] ? new KeyFormatEnum($data['format']) : null,
            $data['filename'],
            $data['reportReason'],
            (bool)$data['deletable']
        );
    }

    public function supportsDenormalization(string $class): bool
    {
        return $class === Key::class;
    }
}
