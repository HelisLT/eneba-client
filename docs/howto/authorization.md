# How to authorize

To receive access to the API you need to contact a company representative that shared this documentation with you. He will provide your API credentials during the onboarding process.

After receiving the credentials, you can begin the integration.

First of all, an access token needs to be acquired, it will be used in all API requests as an Authorization HTTP Header.

Request example:
```shell script
curl -X POST -H "Content-Type: application/x-www-form-urlencoded" \
-d "grant_type=api_consumer&client_id=917611c2-70a5-11e9-97c4-46691b78bfa2&id=<AUTH ID RECEIVED FROM REPRESENTATIVE>&secret=<AUTH SECRET RECEIVED FROM REPRESENTATIVE>" \
https://user.eneba.com/oauth/token
```

Response example:
```json
{
    "access_token": "eyJ0at",
    "expires_in": 2505600,
    "refresh_token": "defref",
    "token_type": "Bearer"
}
```
	
All requests to GraphQL must contain access token in the `Authorization` HTTP Header.
 
Example: `Authorization: Bearer eyJ0at`

Please note, the acquired token is temporary and will expire. You might want to automate the token refresh flow by following the practices described [here](https://www.oauth.com/oauth2-servers/access-tokens/refreshing-access-tokens/).
