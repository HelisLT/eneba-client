# "Declared Stock" feature

You can automate your auction's stock by providing `declaredStock` value with the `S_updateAuction` or `S_createAuction` mutation.
By declaring the `declaredStock` value you tell how many keys you have on your side excluding the already submitted keys. 

## Requirements

To use this feature you need to register 2 [API callbacks](api-callback.md) with types:
* `P_API_CallbackTypeEnum::DECLARED_STOCK_RESERVATION`
* `P_API_CallbackTypeEnum::DECLARED_STOCK_PROVISION`

Optionally, you may want to register the `P_API_CallbackTypeEnum::DECLARED_STOCK_CANCELLATION` callback, this way you will be able to receive a callback when the order gets canceled.

## How it works

During the purchase process, Eneba.com will call your system twice.
The first call will ask you to reserve the keys for a specific order - a `Reservation request`.
The second one will ask you to provide the purchased keys, called `Provision request`.

## Example

You create an auction with 10 keys and using the “Declared Stock” feature declare 50 keys.
This means that Eneba.com will attempt to sell 60 keys in total.
First, the platform will sell 10 existing keys, then will use the “Declared Stock“ feature to retrieve 50 keys more.

## Payloads

Every request from the Eneba.com side will be authenticated by the `Authorization` header using the Bearer type and value, submitted when registering the `API callback`.

### Reservation Request

The system will make one call to the `Reservation` endpoint with a 60s timeout. In case of error, the buyer will be informed about the unavailable stock.

POST
```json
{
  "action": "RESERVE",
  "orderId": "Uuid",
  "auctions": [
    {
      "auctionId": "Uuid",
      "keyCount": "Int",
      "price": {
        "amount": "Int",
        "currency": "String",
      },
    }
  ]
}
```

### Reservation Response
200
```json
{
  "action": "RESERVE",
  "orderId": "Uuid",
  "success": true,
}
```
By successfully responding to the `Reservation Request` with the `Reservation Response` structure you indicate that you can fully fulfill the reservation.

We recommend holding the reservations for up to 48 hours - this is the longest payment await duration in Eneba.

### Cancellation Request

When a user or a system cancels the order, a cancellation callback will be issued informing you to release the keys for the specific order.
The system will make 2 attempts with a 5s sleep interval and 60s timeout for you to respond.

POST
```json
{
  "action": "CANCEL",
  "orderId": "Uuid",
}
```

### Cancellation Response
200

No response body is expected.

### Provision Request

The system will make 3 attempts with a 5s sleep interval and 60s timeout for you to respond. In case of final failure, the order will be canceled.

If the `Provision Request` will end up in a failure, you will be charged the auction’s commission amount.

If the `Provision Request` will end up in failure 3 times in a row for different buyers, Eneba can disable the auction to prevent reputation damage.

POST 
```json
{
  "action": "PROVIDE",
  "orderId": "Uuid",
}
```

### Provision Response
200
```json
{
  "action": "PROVIDE",
  "orderId": "Uuid",
  "success": true,
  "auctions": [
    {
      "auctionId": "Uuid",
      "keys": [
        {
          "type": "TEXT",
          "value": "some key value",
        },
        {
          "type": "IMAGE",
          "value": "base64 encoded image contents",
          "filename": "the name of the file",
        }
      ]
    }
  ]
}
```

## Key returns

You should expect that the purchased keys can be returned. 
The returned keys will be stored in the Eneba stock. 
You can leave them there or could remove them by calling the `S_updateAuction` API mutation.
