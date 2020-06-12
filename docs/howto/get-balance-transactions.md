# How to get balance transactions

You can get all your balance transaction by using `B_transactions` query, it allows various filtering of transactions.

You can filter transactions by type:
- DEPOSIT
- WITHDRAW
- PURCHASE
- GIFT_CARDS_PURCHASE
- EXCHANGE
- SALE
- AFFILIATE
- FEE
- NEW_AUCTION_FEE
- AUCTION_EDIT_FEE
- AUCTION_RENEW_FEE
- FUNDS_RELEASE_FEE

## Examples

### To get completed sales transactions perform `B_transactions` with `SALE` type

Request:
```
{
  B_transactions(types: [SALE], status: COMPLETE, first: 5) {
    totalCount
    pageInfo {
      hasNextPage
      hasPreviousPage
      startCursor
      endCursor
    }
    edges {
      node {
        ... on B_API_SaleTransaction {
          orderNumber
          presale
          referenceName
        }
        code
        type
        status
        direction
        money {
          amount
          currency
        }

        createdAt
      }
      cursor
    }
  }
}
```

Response:
```json
{
  "data": {
    "B_transactions": {
      "totalCount": 139699,
      "pageInfo": {
        "hasNextPage": true,
        "hasPreviousPage": false,
        "startCursor": "YXJyYXljb25uZWN0aW9uOjA=",
        "endCursor": "YXJyYXljb25uZWN0aW9uOjk="
      },
      "edges": [
        {
          "node": {
            "orderNumber": "o-XXXXXX",
            "presale": false,
            "referenceName": "F1 2018 - Headline Content Pack (DLC) Steam Key EUROPE",
            "code": "t-YYYYYY",
            "type": "SALE",
            "status": "COMPLETE",
            "direction": "IN",
            "money": {
              "amount": 29,
              "currency": "EUR"
            },
            "createdAt": "2020-06-12T00:46:39+00:00"
          },
          "cursor": "YXJyYXljb25uZWN0aW9uOjA="
        },
        {
          "node": {
            "orderNumber": "o-XXXXXX",
            "presale": false,
            "referenceName": "Playstation Plus Card 90 days (DK) PSN Key DENMARK",
            "code": "t-YYYYYY",
            "type": "SALE",
            "status": "COMPLETE",
            "direction": "IN",
            "money": {
              "amount": 2079,
              "currency": "EUR"
            },
            "createdAt": "2020-06-10T21:08:28+00:00"
          },
          "cursor": "YXJyYXljb25uZWN0aW9uOjE="
        },
        {
          "node": {
            "orderNumber": "o-XXXXXX",
            "presale": false,
            "referenceName": "F1 2018 - Headline Content Pack (DLC) Steam Key EUROPE",
            "code": "t-YYYYYY",
            "type": "SALE",
            "status": "COMPLETE",
            "direction": "IN",
            "money": {
              "amount": 29,
              "currency": "EUR"
            },
            "createdAt": "2020-06-10T13:03:23+00:00"
          },
          "cursor": "YXJyYXljb25uZWN0aW9uOjI="
        },
        {
          "node": {
            "orderNumber": "o-XXXXXX",
            "presale": false,
            "referenceName": "F1 2018 - Headline Content Pack (DLC) Steam Key EUROPE",
            "code": "t-YYYYYY",
            "type": "SALE",
            "status": "COMPLETE",
            "direction": "IN",
            "money": {
              "amount": 29,
              "currency": "EUR"
            },
            "createdAt": "2020-06-10T03:45:18+00:00"
          },
          "cursor": "YXJyYXljb25uZWN0aW9uOjM="
        },
        {
          "node": {
            "orderNumber": "o-XXXXXX",
            "presale": false,
            "referenceName": "F1 2018 - Headline Content Pack (DLC) Steam Key EUROPE",
            "code": "t-YYYYYY",
            "type": "SALE",
            "status": "COMPLETE",
            "direction": "IN",
            "money": {
              "amount": 29,
              "currency": "EUR"
            },
            "createdAt": "2020-06-08T22:21:19+00:00"
          },
          "cursor": "YXJyYXljb25uZWN0aW9uOjQ="
        }
      ]
    }
  }
}
```

### To get completed auction update fee transactions perform `B_transactions` with `AUCTION_EDIT_FEE` type

Request:
```
{
  B_transactions(types: [AUCTION_EDIT_FEE], first: 5) {
    totalCount
    pageInfo {
      hasNextPage
      hasPreviousPage
      startCursor
      endCursor
    }
    edges {
      node {
        ... on B_API_AuctionEditFeeTransaction {
          feeType
          auctionId
          referenceName
        }
        code
        type
        status
        direction
        money {
          amount
          currency
        }

        createdAt
      }
      cursor
    }
  }
}
```

Response:
```json
{
  "data": {
    "B_transactions": {
      "totalCount": 6629,
      "pageInfo": {
        "hasNextPage": true,
        "hasPreviousPage": false,
        "startCursor": "YXJyYXljb25uZWN0aW9uOjA=",
        "endCursor": "YXJyYXljb25uZWN0aW9uOjQ="
      },
      "edges": [
        {
          "node": {
            "feeType": "AUCTION_EDIT",
            "auctionId": "ffffffff-c5a7-11e9-a466-ffffffffffff",
            "referenceName": "F1 2018 - Headline Content Pack (DLC) Steam Key EUROPE",
            "code": "t-YYYYYYYY",
            "type": "AUCTION_EDIT_FEE",
            "status": "COMPLETE",
            "direction": "OUT",
            "money": {
              "amount": 5,
              "currency": "EUR"
            },
            "createdAt": "2020-06-12T10:13:02+00:00"
          },
          "cursor": "YXJyYXljb25uZWN0aW9uOjA="
        },
        {
          "node": {
            "feeType": "AUCTION_EDIT",
            "auctionId": "ffffffff-c5a7-11e9-a466-ffffffffffff",
            "referenceName": "F1 2018 - Headline Content Pack (DLC) Steam Key EUROPE",
            "code": "t-YYYYYYYY",
            "type": "AUCTION_EDIT_FEE",
            "status": "COMPLETE",
            "direction": "OUT",
            "money": {
              "amount": 5,
              "currency": "EUR"
            },
            "createdAt": "2020-06-12T10:12:27+00:00"
          },
          "cursor": "YXJyYXljb25uZWN0aW9uOjE="
        },
        {
          "node": {
            "feeType": "AUCTION_EDIT",
            "auctionId": "ffffffff-c5a7-11e9-a466-ffffffffffff",
            "referenceName": "F1 2018 - Headline Content Pack (DLC) Steam Key EUROPE",
            "code": "t-YYYYYYYY",
            "type": "AUCTION_EDIT_FEE",
            "status": "COMPLETE",
            "direction": "OUT",
            "money": {
              "amount": 5,
              "currency": "EUR"
            },
            "createdAt": "2020-06-12T10:09:06+00:00"
          },
          "cursor": "YXJyYXljb25uZWN0aW9uOjI="
        },
        {
          "node": {
            "feeType": "AUCTION_EDIT",
            "auctionId": "ffffffff-c5a7-11e9-a466-ffffffffffff",
            "referenceName": "F1 2018 - Headline Content Pack (DLC) Steam Key EUROPE",
            "code": "t-YYYYYYYY",
            "type": "AUCTION_EDIT_FEE",
            "status": "COMPLETE",
            "direction": "OUT",
            "money": {
              "amount": 5,
              "currency": "EUR"
            },
            "createdAt": "2020-06-12T10:08:28+00:00"
          },
          "cursor": "YXJyYXljb25uZWN0aW9uOjM="
        },
        {
          "node": {
            "feeType": "AUCTION_EDIT",
            "auctionId": "ffffffff-c5a7-11e9-a466-ffffffffffff",
            "referenceName": "F1 2018 - Headline Content Pack (DLC) Steam Key EUROPE",
            "code": "t-YYYYYYYY",
            "type": "AUCTION_EDIT_FEE",
            "status": "COMPLETE",
            "direction": "OUT",
            "money": {
              "amount": 5,
              "currency": "EUR"
            },
            "createdAt": "2020-06-12T10:08:02+00:00"
          },
          "cursor": "YXJyYXljb25uZWN0aW9uOjQ="
        }
      ]
    }
  }
}
```

### To get withdraw transactions perform `B_transactions` with `WITHDRAW` type

Request:
```
{
  B_transactions(types: [WITHDRAW], first: 5) {
    totalCount
    pageInfo {
      hasNextPage
      hasPreviousPage
      startCursor
      endCursor
    }
    edges {
      node {
        ... on B_API_WithdrawTransaction {
          invoiceUrl
        }
        code
        type
        status
        direction
        money {
          amount
          currency
        }

        createdAt
      }
      cursor
    }
  }
}
```

Response:
```json
{
  "data": {
    "B_transactions": {
      "totalCount": 149,
      "pageInfo": {
        "hasNextPage": true,
        "hasPreviousPage": false,
        "startCursor": "YXJyYXljb25uZWN0aW9uOjA=",
        "endCursor": "YXJyYXljb25uZWN0aW9uOjQ="
      },
      "edges": [
        {
          "node": {
            "invoiceUrl": "<invoice url>",
            "code": "t-YYYYYY",
            "type": "WITHDRAW",
            "status": "ON_HOLD",
            "direction": "OUT",
            "money": {
              "amount": 7000,
              "currency": "EUR"
            },
            "createdAt": "2020-06-03T21:12:29+00:00"
          },
          "cursor": "YXJyYXljb25uZWN0aW9uOjA="
        },
        {
          "node": {
            "invoiceUrl": "<invoice url>",
            "code": "t-YYYYYY",
            "type": "WITHDRAW",
            "status": "ON_HOLD",
            "direction": "OUT",
            "money": {
              "amount": 100000,
              "currency": "EUR"
            },
            "createdAt": "2020-05-11T20:30:41+00:00"
          },
          "cursor": "YXJyYXljb25uZWN0aW9uOjE="
        },
        {
          "node": {
            "invoiceUrl": "<invoice url>",
            "code": "t-YYYYYY",
            "type": "WITHDRAW",
            "status": "ON_HOLD",
            "direction": "OUT",
            "money": {
              "amount": 50000,
              "currency": "EUR"
            },
            "createdAt": "2020-03-08T20:28:08+00:00"
          },
          "cursor": "YXJyYXljb25uZWN0aW9uOjI="
        },
        {
          "node": {
            "invoiceUrl": "<invoice url>",
            "code": "t-YYYYYY",
            "type": "WITHDRAW",
            "status": "ON_HOLD",
            "direction": "OUT",
            "money": {
              "amount": 85000,
              "currency": "EUR"
            },
            "createdAt": "2020-02-12T20:25:52+00:00"
          },
          "cursor": "YXJyYXljb25uZWN0aW9uOjM="
        },
        {
          "node": {
            "invoiceUrl": "<invoice url>",
            "code": "t-YYYYYY",
            "type": "WITHDRAW",
            "status": "ON_HOLD",
            "direction": "OUT",
            "money": {
              "amount": 69133,
              "currency": "EUR"
            },
            "createdAt": "2020-01-21T20:22:32+00:00"
          },
          "cursor": "YXJyYXljb25uZWN0aW9uOjQ="
        }
      ]
    }
  }
}
```
