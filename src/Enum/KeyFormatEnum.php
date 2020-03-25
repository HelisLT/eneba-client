<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Enum;

use MyCLabs\Enum\Enum;

/**
 * @method static static TEXT()
 * @method static static IMAGE()
 * @method static static PHYSICAL()
 */
class KeyFormatEnum extends Enum
{
    public const TEXT = 'TEXT';
    public const IMAGE = 'IMAGE';
    public const PHYSICAL = 'PHYSICAL';
}
