# How to check action status

By default all mutations performs requested actions asynchronously and returns action ID attribute to allow status polling.

## Perform `A_action` query with action ID

Pass your action ID to input value.

Request:
```
{
  A_action(actionId: "1f6d4408-77be-11ea-a6a7-26dc9f40d3c4") {
    id
    state
  }
}
```

Response:
```json
{
  "data": {
    "A_action": {
      "id": "1f6d4408-77be-11ea-a6a7-26dc9f40d3c4",
      "state": "COMPLETED"
    }
  }
}
```

This query will return NULL if execution is not started yet.
