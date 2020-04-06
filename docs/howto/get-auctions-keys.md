# How to get auctions keys

You can get auction's keys by performing `S_keys` query with your auction ID and (optional) state.

## Get your auction's active keys using `S_keys`

Request:
```
{
  S_keys(stockId: "ffffffff-23bc-11e9-9c94-ffffffffffff", state: ACTIVE) {
    edges {
      node {
        id
        value
        state
      }
    }
  }
}
```

Response:
```json
{
  "data": {
    "S_keys": {
      "edges": [
        {
          "node": {
            "id": "ffffffff-691e-11ea-afc4-ffffffffffff",
            "value": "first-key",
            "state": "ACTIVE"
          }
        },
        {
          "node": {
            "id": "ffffffff-691e-11ea-b590-ffffffffffff",
            "value": "second-key",
            "state": "ACTIVE"
          }
        }
      ]
    }
  }
}
```

## Get your auction's reported keys using `S_keys`

Request:
```
{
  S_keys(state: REPORTED, stockId: "ffffffff-3c55-11ea-aedd-ffffffffffff") {
    edges {
      node {
        id
        reportReason
      }
    }
  }
}
```

Response:
```json
{
  "data": {
    "S_keys": {
      "edges": [
        {
          "node": {
            "id": "ffffffff-3c58-11ea-af1e-ffffffffffff",
            "reportReason": "Part of the key was not visible"
          }
        }
      ]
    }
  }
}
```
