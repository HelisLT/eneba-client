<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Denormalizer;

use Helis\EnebaClient\Denormalizer\Object\ActionResponseDenormalizer;
use Helis\EnebaClient\Denormalizer\Object\ActionStateDenormalizer;
use Helis\EnebaClient\Denormalizer\Object\ArrayDenormalizer;
use Helis\EnebaClient\Denormalizer\Object\AuctionConnectionDenormalizer;
use Helis\EnebaClient\Denormalizer\Object\AuctionDenormalizer;
use Helis\EnebaClient\Denormalizer\Object\AuctionEdgeDenormalizer;
use Helis\EnebaClient\Denormalizer\Object\AuthResponseDenormalizer;
use Helis\EnebaClient\Denormalizer\Object\CallbackDenormalizer;
use Helis\EnebaClient\Denormalizer\Object\KeyConnectionDenormalizer;
use Helis\EnebaClient\Denormalizer\Object\KeyDenormalizer;
use Helis\EnebaClient\Denormalizer\Object\KeyEdgeDenormalizer;
use Helis\EnebaClient\Denormalizer\Object\MoneyDenormalizer;
use Helis\EnebaClient\Denormalizer\Object\PageInfoDenormalizer;
use Helis\EnebaClient\Denormalizer\Object\PriceUpdateQuotaDenormalizer;
use Helis\EnebaClient\Denormalizer\Object\ProductConnectionDenormalizer;
use Helis\EnebaClient\Denormalizer\Object\ProductDenormalizer;
use Helis\EnebaClient\Denormalizer\Object\ProductEdgeDenormalizer;
use Helis\EnebaClient\Denormalizer\Object\ProvidedKeyDenormalizer;
use Helis\EnebaClient\Denormalizer\Object\ProvisionAuctionEntryDenormalizer;
use Helis\EnebaClient\Denormalizer\Object\ProvisionRequestDenormalizer;
use Helis\EnebaClient\Denormalizer\Object\ProvisionResponseDenormalizer;
use Helis\EnebaClient\Denormalizer\Object\ReservationRequestDenormalizer;
use Helis\EnebaClient\Denormalizer\Object\ReservationResponseDenormalizer;
use Helis\EnebaClient\Denormalizer\Object\ReservedAuctionEntryDenormalizer;
use Helis\EnebaClient\Denormalizer\Object\SalesConnectionDenormalizer;
use Helis\EnebaClient\Denormalizer\Object\SalesDenormalizer;
use Helis\EnebaClient\Denormalizer\Object\SalesEdgeDenormalizer;
use Helis\EnebaClient\Denormalizer\Object\StockConnectionDenormalizer;
use Helis\EnebaClient\Denormalizer\Object\StockDenormalizer;
use Helis\EnebaClient\Denormalizer\Object\StockEdgeDenormalizer;
use RuntimeException;

class Denormalizer implements DenormalizerInterface, NormalizerInterface
{
    /**
     * @var self
     */
    private static $instance;

    /**
     * @var DenormalizerInterface[]
     */
    private $denormalizers;

    /**
     * @var NormalizerInterface[]
     */
    private $normalizers;

    /**
     * @var DenormalizerInterface[]|bool[]
     */
    private $denormalizersCache = [];

    /**
     * @var NormalizerInterface[]|bool[]
     */
    private $normalizersCache = [];

    private function __construct()
    {
        $this->denormalizers = [
            new ArrayDenormalizer(),
            new PageInfoDenormalizer(),
            new ProductDenormalizer(),
            new StockDenormalizer(),
            new SalesDenormalizer(),
            new ActionStateDenormalizer(),
            new ActionResponseDenormalizer(),
            new AuthResponseDenormalizer(),
            new AuctionDenormalizer(),
            new MoneyDenormalizer(),
            new ProductEdgeDenormalizer(),
            new StockEdgeDenormalizer(),
            new SalesEdgeDenormalizer(),
            new AuctionEdgeDenormalizer(),
            new ProductConnectionDenormalizer(),
            new AuctionConnectionDenormalizer(),
            new StockConnectionDenormalizer(),
            new SalesConnectionDenormalizer(),
            new KeyDenormalizer(),
            new KeyConnectionDenormalizer(),
            new KeyEdgeDenormalizer(),
            new PriceUpdateQuotaDenormalizer(),
            new ReservationRequestDenormalizer(),
            new ReservedAuctionEntryDenormalizer(),
            new ProvisionRequestDenormalizer(),
        ];

        $this->normalizers = [
            new ArrayDenormalizer(),
            new CallbackDenormalizer(),
            new ReservationResponseDenormalizer(),
            new ProvisionResponseDenormalizer(),
            new ProvisionAuctionEntryDenormalizer(),
            new ProvidedKeyDenormalizer(),
        ];
    }

    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();

            foreach (self::$instance->denormalizers as $denormalizer) {
                if ($denormalizer instanceof DenormalizerAwareInterface) {
                    $denormalizer->setDenormalizer(self::$instance);
                }
            }

            foreach (self::$instance->normalizers as $normalizer) {
                if ($normalizer instanceof NormalizerAwareInterface) {
                    $normalizer->setNormalizer(self::$instance);
                }
            }
        }

        return self::$instance;
    }

    public function denormalize($data, string $class)
    {
        if ($data === null) {
            return null;
        }

        if (!$this->supportsDenormalization($class)) {
            throw new RuntimeException(sprintf('Denormalization of given class(%s) is not supported', $class));
        }

        return $this->denormalizersCache[$class]->denormalize($data, $class);
    }

    public function supportsDenormalization(string $class): bool
    {
        if (isset($this->denormalizersCache[$class])) {
            return $this->denormalizersCache[$class] !== false;
        }

        foreach ($this->denormalizers as $denormalizer) {
            if ($denormalizer->supportsDenormalization($class)) {
                $this->denormalizersCache[$class] = $denormalizer;

                return true;
            }
        }

        return $this->denormalizersCache[$class] = false;
    }

    public function normalize($data)
    {
        if (empty($data)) {
            return null;
        }

        $class = null;
        if (is_object($data)) {
            $class = get_class($data);
        }
        if (is_array($data)) {
            $class = get_class(reset($data)) . '[]';
        }

        if ($class === null) {
            throw new RuntimeException(sprintf('Normalization of given type (%s) is not supported', gettype($data)));
        }

        if (!$this->supportsNormalization($class)) {
            throw new RuntimeException(sprintf('Normalization of given class (%s) is not supported', $class));
        }

        return $this->normalizersCache[$class]->normalize($data);
    }

    public function supportsNormalization(string $class): bool
    {
        if (isset($this->normalizersCache[$class])) {
            return $this->normalizersCache[$class] !== false;
        }

        foreach ($this->normalizers as $normalizer) {
            if ($normalizer->supportsNormalization($class)) {
                $this->normalizersCache[$class] = $normalizer;

                return true;
            }
        }

        return $this->normalizersCache[$class] = false;
    }
}
