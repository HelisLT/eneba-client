# How to manage your auction's stock

You can add and remove keys from your auction's stock if needed.

Query S_stock with stock ID to get available keys counter (onHand - onHold)
Perform S_updateAuction mutation to add keys to auction


## 1. Get your auction's ID using `S_stock` query

This step is optional if you already know the ID of the auction.

Request:
```
{
  S_stock {
    edges {
      node {
        id
        onHand
        onHold
        product {
          name
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
            "onHand": 3,
            "onHold": 3,
            "product": {
              "name": "FIFA 19 Origin Key GLOBAL"
            }
          }
        }
      ]
    }
  }
}
```

## 2.1. Perform `S_updateAuction` mutation if you want to add keys

Pass your auction ID and new keys to input value.

Request:
```
mutation {
  S_updateAuction(
    input: {
      id: "7150b54a-23bc-11e9-9c94-9af5d7d4f046"
      addedKeys: ["first-key", "second-key"]
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
      "actionId": "7c084dfa-77c0-11ea-b1fb-423c92839f99"
    }
  }
}
```

## 3. Perform `A_action` query to check action status

Auction update mutation initiates update action and performs it asynchronously.
You have to poll for actions state to make sure the auction updated successfully. 

[What is action and how to check it's state](check-action-status.md)

## 4. Check your auction's keys

This step is optional.

[How to get auctions keys](get-auctions-keys.md)
