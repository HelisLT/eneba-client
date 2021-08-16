<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Enum;

use MyCLabs\Enum\Enum;

/**
 * @method static static RESERVE()
 * @method static static PROVIDE()
 */
class DeclaredStockActionEnum extends Enum
{
    public const RESERVE = 'RESERVE';
    public const PROVIDE = 'PROVIDE';
}
