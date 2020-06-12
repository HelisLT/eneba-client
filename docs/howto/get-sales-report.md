# How to get sales report

> :warning: **This method deprecated and might return unexpected results. Check sales by using [transactions query](get-balance-transactions.md).**

You can get all your sales by using `S_sales` query, it allows simple filtering of sales.

## Perform `S_sales` to get report

Request:
```
{
  S_sales {
    edges {
      node {
        id
        quantity
        createdAt
        totalPrice {
          amount
          currency
        }
        auctionId
        productName
        keys
      }
    }
  }
}
```

Response:
```json
{
  "data": {
    "S_sales": {
      "edges": [
        {
          "node": {
            "id": "fffffffff-7792-11ea-80b4-ffffffffffff",
            "quantity": 1,
            "createdAt": "2020-04-05T23:12:29+00:00",
            "totalPrice": {
              "amount": 29,
              "currency": "EUR"
            },
            "auctionId": "ffffffff-2f7d-11e9-a926-ffffffffffff",
            "productName": "Sherlock Holmes: The Secret of the Silver Earring Steam Key GLOBAL",
            "keys": [
              "key-A"
            ]
          }
        },
        {
          "node": {
            "id": "ffffffff-778e-11ea-9168-ffffffffffff",
            "quantity": 1,
            "createdAt": "2020-04-05T22:38:22+00:00",
            "totalPrice": {
              "amount": 2079,
              "currency": "EUR"
            },
            "auctionId": "ffffffff-59dd-11e9-81fa-ffffffffffff",
            "productName": "Playstation Plus Card 90 days (DK) PSN Key DENMARK",
            "keys": [
              "key-B"
            ]
          }
        }
      ]
    }
  }
}
```
