<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Model\Input;

use Helis\EnebaClient\Enum\KeyStateEnum;

class KeysFilter extends PaginationFilter
{
    /**
     * @var KeyStateEnum|null
     */
    protected $state;

    public function getState(): ?KeyStateEnum
    {
        return $this->state;
    }

    public function setState(?KeyStateEnum $state): void
    {
        $this->state = $state;
    }
}
