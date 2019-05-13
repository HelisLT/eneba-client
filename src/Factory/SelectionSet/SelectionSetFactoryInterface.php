<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Factory\SelectionSet;

use Helis\GraphqlQueryBuilder\SelectionSet\SelectionSet;

interface SelectionSetFactoryInterface
{
    public function get(): SelectionSet;
}
