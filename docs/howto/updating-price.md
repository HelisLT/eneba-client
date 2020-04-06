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

## 2. Perform `S_updateAuction` mutation with desired price

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

## 3. Perform `A_action` query to check action status

Auction update mutation initiates update action and performs it asynchronously.
You have to poll for actions state to make sure the auction updated successfully. 

[What is action and how to check it's state](check-action-status.md)
