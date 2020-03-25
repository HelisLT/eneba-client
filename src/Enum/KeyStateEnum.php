<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Enum;

use MyCLabs\Enum\Enum;

/**
 * @method static static PRE_ORDERED()
 * @method static static SOLD()
 * @method static static PENDING()
 * @method static static ACTIVE()
 * @method static static REPORTED()
 */
class KeyStateEnum extends Enum
{
    public const PRE_ORDERED = 'PRE_ORDERED';
    public const SOLD = 'SOLD';
    public const PENDING = 'PENDING';
    public const ACTIVE = 'ACTIVE';
    public const REPORTED = 'REPORTED';
}
