# Getting the "Declared Stock" results

To get the responses we received from you along with their processing results, you can use the `P_declaredStockResult` query.
This may help you to solve response validation or other callback related errors. 

Request:
```
query {
  P_declaredStockResult (orderId: "Uuid") {
    callbackResults {
      status
      type
      callbackRequests {
        createdAt
        callbackResponse {
          response
          status
        }
        failureReason {
          reason
          details
        }
      }
    }
  }
}
```

Response:
```json
{
  "declaredStockResult": {
    "callbackResults": [
      {
        "status": "COMPLETED",
        "type": "DECLARED_STOCK_RESERVATION",
        "callbackRequests": [
          {
            "createdAt": "2021-01-01T01:01:00+00:00",
            "callbackResponse": {
              "response": "{\"action\":\"RESERVE\",\"orderId\":\"7c642706-106c-17ec-aea9-b6c9510feba7\",\"success\":true}",
              "status": "200"
            }
          }
        ]
      },
      {
        "status": "FAILED",
        "type": "DECLARED_STOCK_CANCELLATION",
        "callbackRequests": [
          {
            "createdAt": "2021-01-01T01:01:00+00:00",
            "callbackResponse": {
              "response": "<h1>Internal server error</h1>",
              "status": "500"
            },
            "failureReason": {
              "reason": "failed_request",
              "details": "[500]: Internal server error"
            }
          },
          {
            "createdAt": "2021-01-01T01:01:00+00:00",
            "callbackResponse": {
              "response": "",
              "status": "400"
            }
          }
        ]
      },
      {
        "status": "COMPLETED",
        "type": "DECLARED_STOCK_PROVISION",
        "callbackRequests": [
          {
            "createdAt": "2021-01-01T01:01:00+00:00",
            "callbackResponse": {
              "response": "{\"some\":\"malformed json\"}",
              "status": "200"
            },
            "failureReason": {
              "reason": "invalid_callback_response",
              "details": "ProvisionRequest has invalid response, violations: missing \"action\" field"
            }
          },
          {
            "createdAt": "2021-01-01T01:01:00+00:00",
            "callbackResponse": {
              "response": "{\"action\":\"PROVIDE\",\"orderId\":\"7c642706-106c-17ec-aea9-b6c9510feba7\",\"success\":true,\"auctions\":[{\"auctionId\":\"615d64d1-ad0a-14fc-a78a-b8cc43be84de\",\"keys\":[{\"type\":\"TEXT\",\"hash\":\"hash-1\"},{\"type\":\"TEXT\",\"hash\":\"hash-2\"}]}]}",
              "status": "200"
            }
          }
        ]
      }
    ]
  }
}
```
