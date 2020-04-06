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
