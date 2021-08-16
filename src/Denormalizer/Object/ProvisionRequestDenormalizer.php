<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Denormalizer\Object;

use Helis\EnebaClient\Denormalizer\DenormalizerInterface;
use Helis\EnebaClient\Enum\DeclaredStockActionEnum;
use Helis\EnebaClient\Model\DeclaredStock\ProvisionRequest;
use Ramsey\Uuid\Uuid;

class ProvisionRequestDenormalizer implements DenormalizerInterface
{
    public function denormalize($data, string $class): ProvisionRequest
    {
        return new ProvisionRequest(
            Uuid::fromString($data['orderId']),
            DeclaredStockActionEnum::{$data['action']}()
        );
    }

    public function supportsDenormalization(string $class): bool
    {
        return $class === ProvisionRequest::class;
    }
}
