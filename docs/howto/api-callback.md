# Registering the API callbacks

You can register various callback URLs to your system based on the feature you use. 
The specific callback requirements will be listed by the exact features.

Request:
```
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
