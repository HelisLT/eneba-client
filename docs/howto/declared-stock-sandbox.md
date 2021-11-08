# Testing the "Declared Stock" on the Eneba sandbox

This guide assumes that you already have the "Sandbox" credentials as described in the [quickstart](../QUICKSTART.md).

## Requirements

Please refer to the [main document](declared-stock.md#requirements) regarding the mandatory requirements.

## Payloads

Please refer to the [main document](declared-stock.md#payloads) regarding the payloads.

## Testing

The sandbox exposes mutation to manually trigger the required callback type:

```graphql
mutation {
  P_triggerCallback(input: {
    type: DECLARED_STOCK_RESERVATION
    orderId: "Uuid"
    auction: {
      auctionId: "Uuid"
      price: {
        amount: "Int"
        currency: "String"
      }
      keyCount: "Int"
    }
  }){
    success
    message
  }
}
```

Example success response:
```json
{
  "data": {
    "P_triggerCallback": {
      "success": true,
      "message": null
    }
  }
}
```

Example failure response:
```json
{
  "data": {
    "P_triggerCallback": {
      "success": false,
      "message": "Failed to send ReservationRequest (id:uuid). Got HTTP exception: Bad Request"
    }
  }
}
```

## Getting more results

In case you find the `P_triggerCallback` message unclear, please use the `P_declaredStockResult` query as [described in the guide](declared-stock-result.md).

# Integration status

The "Declared Stock" integration in the Eneba sandbox is considered successful when last `Reservation` and `Provision` requests are both `COMPLETED`.
