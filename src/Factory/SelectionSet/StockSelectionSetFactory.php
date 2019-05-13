<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Factory\SelectionSet;

use Helis\EnebaClient\Enum\SelectionSetFactoryProviderNameEnum;
use Helis\EnebaClient\Provider\SelectionSetFactoryProviderAwareInterface;
use Helis\EnebaClient\Provider\SelectionSetFactoryProviderAwareTrait;
use Helis\GraphqlQueryBuilder\SelectionSet\Field;
use Helis\GraphqlQueryBuilder\SelectionSet\SelectionSet;

class StockSelectionSetFactory implements SelectionSetFactoryInterface, SelectionSetFactoryProviderAwareInterface
{
    use SelectionSetFactoryProviderAwareTrait;

    public function get(): SelectionSet
    {
        return new SelectionSet([
            new Field('id'),
            new Field('product', $this->provider->get(SelectionSetFactoryProviderNameEnum::PRODUCT())->get()),
            new Field('unitsSold'),
            new Field('onHand'),
            new Field('status'),
            new Field('expiresAt'),
            new Field('autoRenew'),
            new Field('price', $this->provider->get(SelectionSetFactoryProviderNameEnum::MONEY())->get()),
            new Field('createdAt'),
        ]);
    }
}
