<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Factory\SelectionSet;

use Helis\EnebaClient\Enum\SelectionSetFactoryProviderNameEnum;
use Helis\EnebaClient\Provider\SelectionSetFactoryProviderAwareInterface;
use Helis\EnebaClient\Provider\SelectionSetFactoryProviderAwareTrait;
use Helis\GraphqlQueryBuilder\Argument\VariableValue;
use Helis\GraphqlQueryBuilder\SelectionSet\Field;
use Helis\GraphqlQueryBuilder\SelectionSet\SelectionSet;

class ProductSelectionSetFactory implements SelectionSetFactoryInterface, SelectionSetFactoryProviderAwareInterface
{
    use SelectionSetFactoryProviderAwareTrait;

    private $includeAuctions;

    public function __construct(bool $includeAuctions)
    {
        $this->includeAuctions = $includeAuctions;
    }

    public function get(): SelectionSet
    {
        $set = new SelectionSet([
            new Field('id'),
            new Field('name'),
            new Field('slug'),
            new Field('platform', new SelectionSet([
                new Field('label'),
                new Field('value'),
            ])),
            new Field('releasedAt'),
        ]);

        if ($this->includeAuctions) {
            $set->add(
                new Field(
                    'auctions',
                    $this->provider->get(SelectionSetFactoryProviderNameEnum::AUCTION_CONNECTION())->get(),
                    ['first' => new VariableValue('$auctionsLimit')]
                )
            );
        }

        return $set;
    }
}
