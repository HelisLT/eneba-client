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

You may also include filters for your stock (All filter fields are optional)  
All filters follow boolean AND logic  
All filter fields can be found [here](./../API.md#s_api_stockfilters) (S_API_StockFilters type)  

```
{
  S_stock(filters: {
    enabled: false,
    price: {
        from: 10000,
        to: 200000
    },
    createdAt: {
        from: "2022-01-01 00:00:00",
        to: "2022-12-01 00:00:00"
    },
    updatedAt: {
        from: "2022-11-01 00:00:00",
        to: "2022-12-01 00:00:00"
    },
    sort: PRICE_DESC
  }) {
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
    addedKeys {
      id
      value
    }
  }
}
```

Response:

```json
{
  "data": {
    "S_updateAuction": {
      "isSuccessful": true,
      "actionId": "7c084dfa-77c0-11ea-b1fb-423c92839f99",
      "addedKeys": [
        {
          "id": "8435b028-0025-11ec-9aae-423c92839f99",
          "value": "first-key"
        },
        {
          "id": "8435b0dc-0025-11ec-a34a-423c92839f99",
          "value": "second-key"
        }
      ]
    }
  }
}
```

## 3. Perform `A_action` query to check action status

Auction update mutation initiates update action and performs it asynchronously. You have to poll for actions state to
make sure the auction updated successfully.

[What is action and how to check it's state](check-action-status.md)

## 4. Check your auction's keys

This step is optional.

[How to get auctions keys](get-auctions-keys.md)
