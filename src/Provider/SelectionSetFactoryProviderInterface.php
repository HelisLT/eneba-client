<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Provider;

use Helis\EnebaClient\Enum\SelectionSetFactoryProviderNameEnum;
use Helis\EnebaClient\Factory\SelectionSet\SelectionSetFactoryInterface;

interface SelectionSetFactoryProviderInterface
{
    public function get(SelectionSetFactoryProviderNameEnum $name): SelectionSetFactoryInterface;
}
