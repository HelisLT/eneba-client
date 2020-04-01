<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Provider;

use Helis\EnebaClient\Enum\SelectionSetFactoryProviderNameEnum as ProviderNameEnum;
use Helis\EnebaClient\Factory\SelectionSet\ActionResponseSelectionSetFactory;
use Helis\EnebaClient\Factory\SelectionSet\ActionSelectionSetFactory;
use Helis\EnebaClient\Factory\SelectionSet\AuctionSelectionSetFactory;
use Helis\EnebaClient\Factory\SelectionSet\ConnectionSelectionSetFactory;
use Helis\EnebaClient\Factory\SelectionSet\CountFeeSelectionSetFactory;
use Helis\EnebaClient\Factory\SelectionSet\KeySelectionSetFactory;
use Helis\EnebaClient\Factory\SelectionSet\MoneySelectionSetFactory;
use Helis\EnebaClient\Factory\SelectionSet\ProductSelectionSetFactory;
use Helis\EnebaClient\Factory\SelectionSet\SalesSelectionSetFactory;
use Helis\EnebaClient\Factory\SelectionSet\SelectionSetFactoryInterface;
use Helis\EnebaClient\Factory\SelectionSet\StockSelectionSetFactory;
use RuntimeException;

class SelectionSetFactoryProvider implements SelectionSetFactoryProviderInterface
{
    /**
     * @var self
     */
    private static $instance;

    /**
     * @var SelectionSetFactoryInterface[]
     */
    private $factories;

    private function __construct()
    {
        $this->factories = [
            ProviderNameEnum::ACTION_RESPONSE => new ActionResponseSelectionSetFactory(),
            ProviderNameEnum::ACTION => new ActionSelectionSetFactory(),
            ProviderNameEnum::AUCTION => new AuctionSelectionSetFactory(),
            ProviderNameEnum::MONEY => new MoneySelectionSetFactory(),
            ProviderNameEnum::SALES => new SalesSelectionSetFactory(),
            ProviderNameEnum::STOCK => new StockSelectionSetFactory(),
            ProviderNameEnum::PRODUCT => new ProductSelectionSetFactory(false),
            ProviderNameEnum::PRODUCT_WITH_AUCTION => new ProductSelectionSetFactory(true),
            ProviderNameEnum::AUCTION_CONNECTION => new ConnectionSelectionSetFactory(ProviderNameEnum::AUCTION()),
            ProviderNameEnum::PRODUCT_CONNECTION => new ConnectionSelectionSetFactory(ProviderNameEnum::PRODUCT()),
            ProviderNameEnum::SALES_CONNECTION => new ConnectionSelectionSetFactory(ProviderNameEnum::SALES()),
            ProviderNameEnum::STOCK_CONNECTION => new ConnectionSelectionSetFactory(ProviderNameEnum::STOCK()),
            ProviderNameEnum::KEY_CONNECTION => new ConnectionSelectionSetFactory(ProviderNameEnum::KEY()),
            ProviderNameEnum::KEY => new KeySelectionSetFactory(),
            ProviderNameEnum::COUNT_FEE => new CountFeeSelectionSetFactory(),
        ];
    }

    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();

            foreach (self::$instance->factories as $factory) {
                if ($factory instanceof SelectionSetFactoryProviderAwareInterface) {
                    $factory->setSelectionSetFactoryProvider(self::$instance);
                }
            }
        }

        return self::$instance;
    }

    public function get(ProviderNameEnum $name): SelectionSetFactoryInterface
    {
        if (!isset($this->factories[$name->getValue()])) {
            throw new RuntimeException('Requested SelectionSetFactory cannot be found!');
        }

        return $this->factories[$name->getValue()];
    }
}
