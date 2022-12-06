# Registering the API callbacks

You can register various callback URLs to your system based on the feature you use. 
The specific callback requirements will be listed by the exact features.

All [API callback](api-callback.md) urls must conform to specific [rule set](api-callback-url-rules.md).

Request:
```GraphQl
mutation {
  P_registerCallback (
    input: {
      type: DECLARED_STOCK_RESERVATION
      url: "https://www.domain.com/path"
      authorization: "eW91ci1hdXRob3JpemF0aW9uLWhlYWRlcg=="
    }
  ) { success }
}
```

Response:
```json
{
  "data": {
    "P_registerCallback": {
      "success": true
    }
  }
}
```

# Removing API callbacks

You can remove specified API callbacks by supplying its ID

Example request:
```GraphQl
mutation removeMyCallback($id: Uuid!) {
    P_removeCallback(input: { id: $id }) {
        success
    }
}
```

Example response:
```json
{
  "data": {
    "P_removeCallback": {
      "success": true
    }
  }
}
```

# Fetching API callbacks

You can get list of registered API callbacks

Example request:
```GraphQl
query {
    P_apiCallbacks {
        id
        type
        authorization
        url
    }
}
```

Example response:
```json
{
    "data": {
        "apiCallbacks": [
            {
                "id": "00000000-0000-0000-0000-000000000000",
                "type": "DECLARED_STOCK_RESERVATION",
                "authorization": "eW91ci1hdXRob3JpemF0aW9uLWhlYWRlcg==",
                "url": "https://www.domain.com/path"
            }
        ]
    }
}
```
