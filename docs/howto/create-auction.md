# How to create auction (stock)

You can create auction for unmapped products using this guide.

Currently, only TEXT KEY CODES allowed.

You can create auction either for released or pre-order products. In first case you will need to provide keys, in pre-order case: just a number of keys to be pre-ordered. 

## 1. Get product's ID for your new auction using `S_products` query

This step is optional if you already know the ID of the product.

Request:
```
{
  S_products(onlyUnmapped: true, search: "half life") {
    edges {
      node {
        id
        name
      }
    }
  }
}
```

Response:
```json
{
  "data": {
    "S_products": {
      "edges": [
        {
          "node": {
            "id": "92c73bdc-80d4-1041-a4de-c12cc3d288c0",
            "name": "Half Life 3"
          }
        }
      ]
    }
  }
}
```

## 2. Perform `S_createAuction` mutation with required arguments

Provide `productId` from previous query and other data.

Request:
```
mutation {
  S_createAuction(
    input: {
      productId: "92c73bdc-80d4-1041-a4de-c12cc3d288c0"
      enabled: true
      keys: ["key-one", "key-two"]
      autoRenew: false
      price: { amount: 1399, currency: "EUR" }
    }
  ) {
    isSuccessful
    actionId
  }
}
```

Response:
```json
{
  "data": {
    "S_createAuction": {
      "isSuccessful": true,
      "actionId": "d30285ba-b129-11ea-9077-0242ac12000b"
    }
  }
}
```

## 3. Perform `A_action` query to check creation status

Auction creation mutation initiates creation action and performs it asynchronously.
You have to poll for actions state to make sure the auction updated successfully. 

[What is action and how to check it's state](check-action-status.md)

## 4. Check your newly created auction

This step is optional.

Request:
```
{
  S_stock(productId: "92c73bdc-80d4-1041-a4de-c12cc3d288c0") {
    edges {
      node {
        id
        product {
          id
          name
        }
        unitsSold
        onHand
        onHold
        status
        expiresAt
        autoRenew
        price {
          amount
          currency
        }
        createdAt
        priceUpdateQuota {
          quota
          nextFreeIn
          totalFree
        }
      }
    }
  }
}
```

Response:
```json
{
  "data": {
    "S_stock": {
      "edges": [
        {
          "node": {
            "id": "d2f631b6-b129-11ea-8ff9-0242ac12000b",
            "product": {
              "id": "92c73bdc-80d4-1041-a4de-c12cc3d288c0",
              "name": "Half Life 3"
            },
            "unitsSold": 0,
            "onHand": 2,
            "onHold": 0,
            "status": "ACTIVE",
            "expiresAt": "2020-07-18T06:06:23+00:00",
            "autoRenew": false,
            "price": {
              "amount": 1399,
              "currency": "EUR"
            },
            "createdAt": "2020-06-18T06:06:23+00:00",
            "priceUpdateQuota": {
              "quota": 10,
              "nextFreeIn": null,
              "totalFree": 10
            }
          }
        }
      ]
    }
  }
}
```

This response indicates that new auction (ID: d2f631b6-b129-11ea-8ff9-0242ac12000b) have been successfully created for the product (ID: 92c73bdc-80d4-1041-a4de-c12cc3d288c0).

## 5. Check your auction's keys

This step is optional.

[How to get auctions keys](get-auctions-keys.md)
