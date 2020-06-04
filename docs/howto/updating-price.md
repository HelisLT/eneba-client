# How to update the price of the auction

## 1. Get your auction's product ID using `S_stock` query

This step is optional if you already know the ID of the auction.

Request:
```
{
  S_stock {
    edges {
      node {
        id
        product {
          name
          id
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
            "id": "7150b54a-23bc-11e9-9c94-9af5d7d4f046",
            "product": {
              "name": "FIFA 19 Origin Key GLOBAL",
              "id": "116c596c-caf3-11e8-a0c3-e6a20e87d50a"
            }
          }
        }
      ]
    }
  }
}
```

## 2. Check free price update quota

Perform S_stock query with your auction id to retrieve state on price update quota. If no free updates left - you are going to be charged update fee.

Request:
```
{
  S_stock(stockId: "7150b54a-23bc-11e9-9c94-9af5d7d4f046") {
    edges {
      node {
        id
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
            "id": "7150b54a-23bc-11e9-9c94-9af5d7d4f046",
            "priceUpdateQuota": {
              "quota": 7,
              "nextFreeIn": null,
              "totalFree": 7
            }
          }
        }
      ]
    }
  }
}
```
[More about checking fees](checking-fee.md)


## 3. Check price update fee

Perform T_countFee query with price update type to retrieve price update fee. It only applies if free updates quota exceeded.

Request:
```
{
  T_countFee(type: AUCTION_PRICE_UPDATE) {
    fee {
      amount
      currency
    }
  }
}
```

Response:
```json
{
  "data": {
    "T_countFee": {
      "fee": {
        "amount": 5,
        "currency": "EUR"
      }
    }
  }
}
```

## 4. Perform `S_updateAuction` mutation with desired price

Pass your desired price and auction ID input value.

Request:
```
mutation {
  S_updateAuction(
    input: {
      id: "7150b54a-23bc-11e9-9c94-9af5d7d4f046"
      price: { amount: 1499, currency: "EUR" }
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
    "S_updateAuction": {
      "isSuccessful": true,
      "actionId": "1f6d4408-77be-11ea-a6a7-26dc9f40d3c4"
    }
  }
}
```

## 5. Perform `A_action` query to check action status

Auction update mutation initiates update action and performs it asynchronously.
You have to poll for actions state to make sure the auction updated successfully. 

[What is action and how to check it's state](check-action-status.md)
