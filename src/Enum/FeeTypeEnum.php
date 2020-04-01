<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Enum;

use MyCLabs\Enum\Enum;

/**
 * @method static static AUCTION_NEW()
 * @method static static AUCTION_EDIT()
 * @method static static AUCTION_RENEW()
 * @method static static WALLET_WITHDRAW()
 * @method static static AUCTION_PRICE_UPDATE()
 */
class FeeTypeEnum extends Enum
{
    public const AUCTION_NEW = 'auction_new';
    public const AUCTION_EDIT = 'auction_edit';
    public const AUCTION_RENEW = 'auction_renew';
    public const WALLET_WITHDRAW = 'wallet_withdraw';
    public const AUCTION_PRICE_UPDATE = 'auction_price_update';
}
