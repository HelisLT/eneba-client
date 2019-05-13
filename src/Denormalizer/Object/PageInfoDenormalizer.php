<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Denormalizer\Object;

use Helis\EnebaClient\Denormalizer\DenormalizerInterface;
use Helis\EnebaClient\Model\Relay\Connection\PageInfo;

class PageInfoDenormalizer implements DenormalizerInterface
{
    public function denormalize($data, string $class): PageInfo
    {
        return new PageInfo(
            $data['startCursor'],
            $data['endCursor'],
            $data['hasPreviousPage'],
            $data['hasNextPage']
        );
    }

    public function supportsDenormalization(string $class): bool
    {
        return $class === PageInfo::class;
    }
}
