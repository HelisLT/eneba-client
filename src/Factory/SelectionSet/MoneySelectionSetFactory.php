<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Factory\SelectionSet;

use Helis\GraphqlQueryBuilder\SelectionSet\Field;
use Helis\GraphqlQueryBuilder\SelectionSet\SelectionSet;

class MoneySelectionSetFactory implements SelectionSetFactoryInterface
{
    public function get(): SelectionSet
    {
        return new SelectionSet([
            new Field('amount'),
            new Field('currency'),
        ]);
    }
}
