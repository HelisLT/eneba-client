# How to check fees

Some actions, like auction price update can be charged additional fee. You should always check fee before performing any action that could be charged.

## Query `T_countFee` with preferred currency and fee type

Request:
```
{
  T_countFee(currency: "EUR", type: AUCTION_PRICE_UPDATE) {
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
        "amount": 2,
        "currency": "EUR"
      }
    }
  }
}
```

## For auction price update fee - check STOCK "priceUpdateQuota" field

Request:
```
{
  S_stock(stockId: "ffffffff-6056-11e9-b4ab-ffffffffffff") {
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
            "id": "ffffffff-6056-11e9-b4ab-ffffffffffff",
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

This response means that for that specific auction you have 7 free price updates.
