# Tokens

In addition to Users the API can also work user-less while working only with Tokens.
With this functionality a 3rd-Party Plugin can be created that will automate the registration process completly.

<aside class="notice">
As there is no user registered with this tokens, no notifications can be sent by SIWECOS.
</aside>

## Register Token

> The **Request** must have the following structure:

```shell
curl -X POST \
  http://bla.local/api/v2/token \
  -H 'Content-Type: application/json' \
  -d '{
    "agb_check": true
}'
```

```http
POST /api/v2/token HTTP/1.1
Host: bla.local
Content-Type: application/json

{
    "agb_check": true
}
```

A SIWECOS Token can be registered instead of a User.

> The **Response** has the following structure:

```json
{
    "token": "w3JofJRDjGsj2MfOlrDivNMK"
}
```

### HTTP Request

`POST /api/v2/token`

### Query Parameters

| Parameter | Type      | Description                                                                                                             |
| --------- | --------- | ----------------------------------------------------------------------------------------------------------------------- |
| agb_check | `boolean` | The user must accept the [General Terms and Conditions](https://siwecos.de/en/terms-and-conditions) to use this service |


### Response Status Codes

| Code | Meaning           |
| ---- | ----------------- |
| 200  | Token registered  |
| 422  | Validation failed |
