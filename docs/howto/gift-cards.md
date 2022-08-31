# Generating gift cards

You can generate gift cards using this guide.


Request:
```GraphQl
mutation {
  S_purchaseGiftCards(
    input: {
        denomination: 100
        quantity: 1
        currency: "EUR"
    }
  )
  {
    actionId
    batchId
  }
}
```

Response:
```json
{
  "data": {
    "S_purchaseGiftCards": {
      "actionId": "a602e73a-28f5-11ed-96c3-065b8b9f71c6",
      "batchId": "a602db96-28f5-11ed-a40c-065b8b9f71c6"
    }
  }
}
```

# Getting codes by batch id

You can get list of codes by batch id

Example request:
```GraphQl
query {
    G_giftCards(batchId:"a602db96-28f5-11ed-a40c-065b8b9f71c6")
    {
        denomination {
            amount
            currency
        }
        code
        state
    }
}
```

Example response:
```json
{
    "data": {
      "G_giftCards": [
        {
          "denomination": {
            "amount": 100,
            "currency": "EUR"
          },
          "code": "*****-*****-*****",
          "state": "AVAILABLE"
        },
        {
          "denomination": {
            "amount": 100,
            "currency": "EUR"
          },
          "code": "*****-*****-*****",
          "state": "AVAILABLE"
        },
        {
          "denomination": {
            "amount": 100,
            "currency": "EUR"
          },
          "code": "*****-*****-*****",
          "state": "AVAILABLE"
        }
      ]
    }
}
```
