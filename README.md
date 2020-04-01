# Eneba client

## Quick start

 1. `composer require helis/eneba-client`

 2. Initialize client:

```php
use Helis\EnebaClient\Client;
use Helis\EnebaClient\Credentials\ClientCredentials;

$credentials = new ClientCredentials('CLIENT_ID', 'CLIENT_SECRET');
$client = new Client($credentials);
```

## Available methods

### Get all products

Returns paginated list of available products without stock (auctions) included.

```php
$products = $client->getProducts();
```

### Get single product

Returns single product with stock (auctions) list included.

```php
$product = $client->getProduct($productId);
```

### Get all your sales

Returns paginated list of your sales.

```php
$sales = $client->getSales();
```

### Get all your stock (auctions)

Returns paginated list of your stock (auctions).

```php
$stock = $client->getStock();
```

### Update auction price

Updates given auction price.

```php
$actionResponse = $client->updateAuction($auctionId, $price);
```

### Get auction keys

Returns paginated list of your auction's keys.

```php
$keys = $client->getAuctionKeys($auctionId);
```

### Add keys to auction

Adds given keys to selected auction.

```php
$actionResponse = $client->addKeysToAuction($auctionId, $keys);
```

### Remove keys from auction

Removes given keys from selected auction.

```php
$actionResponse = $client->removeKeysFromAuction($auctionId, $keysIds);
```

### Get action state

Returns status of action. Can be used to check if auction price request is fulfilled or not yet.

```php
$state = $client->getActionState($auctionResponse->getActionId());
```


### Get fee

Returns fee of a given type.

```php
$fee = $client->getFee(FeeTypeEnum::AUCTION_PRICE_UPDATE());
```
