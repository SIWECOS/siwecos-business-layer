# Tokens

In addition to Users the API can also work user-less while working only with Tokens.
With this functionality a 3rd-Party Plugin can be created that will automate the registration process completly.

<aside class="notice">
As there is no user registered with this tokens, no notifications can be sent by SIWECOS.
</aside>

## Register Token

> The **Request** must have the following structure:

```shell
curl -X GET http://bla.local/api/v2/token
```

```http
GET /api/v2/token HTTP/1.1
Host: bla.local

```

A SIWECOS Token can be registered instead of a User.

> The **Response** has the following structure:

```json
{
    "token": "w3JofJRDjGsj2MfOlrDivNMK"
}
```

### HTTP Request

`GET /api/v2/token`


### Response Status Codes

| Code | Meaning          |
| ---- | ---------------- |
| 200  | Token registered |
