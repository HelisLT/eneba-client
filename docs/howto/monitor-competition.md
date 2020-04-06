# How to monitor competition

You can track your auctions competition and adjust prices accordingly.

## 1. Get your auction's product ID using `S_stock` query

This step is optional if you already know the ID of the product.

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

## 2. Query `S_product` with product ID to get all auctions list

Pass product ID to input value.

Request:
```
{
  S_product(productId: "116c596c-caf3-11e8-a0c3-e6a20e87d50a") {
    id
    name
    auctions {
      edges {
        node {
          merchantName
          isInStock
          price {
            amount
            currency
          }
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
    "S_product": {
      "id": "116c596c-caf3-11e8-a0c3-e6a20e87d50a",
      "name": "FIFA 19 Origin Key GLOBAL",
      "auctions": {
        "edges": [
          {
            "node": {
              "merchantName": "Merchant A",
              "isInStock": true,
              "price": {
                "amount": 1601,
                "currency": "EUR"
              }
            }
          },
          {
            "node": {
              "merchantName": "Merchant B",
              "isInStock": true,
              "price": {
                "amount": 1915,
                "currency": "EUR"
              }
            }
          }
        ]
      }
    }
  }
}
```

## 3. Update your auction's price

You can adjust your auctions price if needed

[How to update auction's price](updating-price.md)
