<?php
declare(strict_types=1);

namespace Helis\EnebaClient;

final class Eneba
{
    public const API_CLIENT_VERSION = 1.4;
    public const TOKEN_EXPIRATION_TIME_WINDOW = 60;

    public const OAUTH_GRANT_TYPE = 'api_consumer';

    public const DEFAULT_OAUTH_CLIENT_ID = '917611c2-70a5-11e9-97c4-46691b78bfa2';
    public const DEFAULT_OAUTH_URL = 'https://user.eneba.com/oauth/token';
    public const DEFAULT_GRAPHQL_URL = 'https://api.eneba.com/';

    public const GQL_SALES_QUERY = 'S_sales';
    public const GQL_STOCK_QUERY = 'S_stock';
    public const GQL_PRODUCTS_QUERY = 'S_products';
    public const GQL_PRODUCT_QUERY = 'S_product';
    public const GQL_ACTION_QUERY = 'A_action';
    public const GQL_UPDATE_AUCTION_MUTATION = 'S_updateAuction';
    public const GQL_KEYS_QUERY = 'S_keys';
    public const GQL_COUNT_FEE_QUERY = 'T_countFee';
    public const GQL_REGISTER_CALLBACK_MUTATION = 'P_registerCallback';
}
