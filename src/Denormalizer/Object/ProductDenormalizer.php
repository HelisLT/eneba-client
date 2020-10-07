<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Denormalizer\Object;

use DateTime;
use Helis\EnebaClient\Denormalizer\DenormalizerAwareInterface;
use Helis\EnebaClient\Denormalizer\DenormalizerAwareTrait;
use Helis\EnebaClient\Denormalizer\DenormalizerInterface;
use Helis\EnebaClient\Model\Product;
use Helis\EnebaClient\Model\Relay\Connection\AuctionConnection;
use Ramsey\Uuid\Uuid;

class ProductDenormalizer implements DenormalizerInterface, DenormalizerAwareInterface
{
    use DenormalizerAwareTrait;

    public function denormalize($data, string $class): Product
    {
        $product = new Product(
            Uuid::fromString($data['id']),
            $data['name'],
            $data['slug'],
            $data['platform']['label'],
            isset($data['releasedAt']) ? new DateTime($data['releasedAt']) : null
        );

        if (isset($data['auctions'])) {
            $product->setAuctions(
                $this->denormalizer->denormalize($data['auctions'], AuctionConnection::class)
            );
        }

        return $product;
    }

    public function supportsDenormalization(string $class): bool
    {
        return $class === Product::class;
    }
}
