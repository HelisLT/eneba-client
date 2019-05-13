<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Provider;

interface SelectionSetFactoryProviderAwareInterface
{
    public function setSelectionSetFactoryProvider(SelectionSetFactoryProviderInterface $provider): void;
}
