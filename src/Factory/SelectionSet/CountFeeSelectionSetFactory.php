<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Factory\SelectionSet;

use Helis\EnebaClient\Enum\SelectionSetFactoryProviderNameEnum;
use Helis\EnebaClient\Provider\SelectionSetFactoryProviderAwareInterface;
use Helis\EnebaClient\Provider\SelectionSetFactoryProviderAwareTrait;
use Helis\GraphqlQueryBuilder\SelectionSet\Field;
use Helis\GraphqlQueryBuilder\SelectionSet\SelectionSet;

class CountFeeSelectionSetFactory implements SelectionSetFactoryInterface, SelectionSetFactoryProviderAwareInterface
{
    use SelectionSetFactoryProviderAwareTrait;

    public function get(): SelectionSet
    {
        return new SelectionSet([
            new Field('fee', $this->provider->get(SelectionSetFactoryProviderNameEnum::MONEY())->get()),
        ]);
    }
}
