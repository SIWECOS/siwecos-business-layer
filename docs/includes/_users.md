# Users

## User Registration

> The **Request** must have the following structure:

```shell
curl -X POST \
  http://bla.local/api/v2/user \
  -H 'Content-Type: application/json' \
  -d '{
    "email": "mail@siwecos.de",
    "password": "abcd1234"
}'
```

```http
POST /api/v2/user HTTP/1.1
Host: bla.local
Content-Type: application/json

{
    "email": "mail@siwecos.de",
    "password": "abcd1234"
}
```

A user can be registered in the database.

> The **Response** has the following structure:

```json
{
  "token": "Y2jHgqtSVcz8eFqiV4eC0s5Y",
  "email": "mail@siwecos.de",
  "preferred_language": "de",
  "active": false
}
```

### HTTP Request

`POST /api/v2/user`

### Query Parameters

| Parameter  | Type        | Description                           |
| ---------- | ----------- | ------------------------------------- |
| email      | `email`     | The user's email address              |
| password   | `password`  | The user's password                   |
| *org_size* | *`integer`* | *The size of the user's organisation* |

### Response Status Codes

| Code | Meaning           |
| ---- | ----------------- |
| 200  | User created      |
| 422  | Validation failed |

<aside class="notice">
After registration a verification mail will be sent to the user's email address.
</aside>



## User Activation

> The **Request** must have the following structure:

```shell
curl -X GET \
  http://bla.local/api/v2/user/activate/{key}
```

```http
GET /api/v2/user/activate/{key} HTTP/1.1
Host: bla.local
```

A user has to be activated via verification of his email address to use the service.

> The **Response** has the following structure:

```json
{
  "token": "Y2jHgqtSVcz8eFqiV4eC0s5Y",
  "email": "mail@siwecos.de",
  "preferred_language": "de",
  "active": true
}
```

### HTTP Request

`GET /api/v2/user/activate/{key}`

### Query Parameters

| Parameter | Type     | Description                                               |
| --------- | -------- | --------------------------------------------------------- |
| key       | `string` | The user's activation key that was sent via email address |

### Response Status Codes

| Code | Meaning                |
| ---- | ---------------------- |
| 200  | OK                     |
| 404  | User not found         |
| 410  | User already activated |


## Resend Activation Mail

> The **Request** must have the following structure:

```shell
curl -X POST \
  http://bla.local/api/v2/user/activate/resend \
  -H 'Content-Type: application/json' \
  -d '{
	"email": "mail@siwecos.de"
}'
```

```http
POST /api/v2/user/activate/resend HTTP/1.1
Host: bla.local
Content-Type: application/json

{
	"email": "mail@siwecos.de"
}
```

The activation mail can be resend if requested.

> The **Response** has the following structure:

```json
{
  "message": "Mail sent."
}
```

### HTTP Request

`POST /api/v2/user/activate/resend`

### Query Parameters

| Parameter | Type    | Description              |
| --------- | ------- | ------------------------ |
| email     | `email` | The user's email address |

### Response Status Codes

| Code | Meaning                |
| ---- | ---------------------- |
| 200  | Mail sent              |
| 410  | User already activated |
| 422  | Validation failed      |

## User Login

> The **Request** must have the following structure:

```shell
curl -X POST \
  http://bla.local/api/v2/user/login \
  -H 'Content-Type: application/json' \
  -d '{
	"email": "mail@siwecos.de",
	"password": "abcd1234"
}'
```

```http
POST /api/v2/user/login HTTP/1.1
Host: bla.local
Content-Type: application/json

{
	"email": "mail@siwecos.de",
	"password": "abcd1234"
}
```

The user can be logged in to SIWECOS.

> The **Response** has the following structure:

```json
{
  "token": "Y2jHgqtSVcz8eFqiV4eC0s5Y",
  "email": "mail@siwecos.de",
  "preferred_language": "de",
  "active": false
}
```

### HTTP Request

`POST /api/v2/user/login`

### Query Parameters

| Parameter | Type       | Description              |
| --------- | ---------- | ------------------------ |
| email     | `email`    | The user's email address |
| password  | `password` | The user's password      |

### Response Status Codes

| Code | Meaning           |
| ---- | ----------------- |
| 200  | User logged in    |
| 403  | Wrong credentials |
| 422  | Validation failed |


## Send Password Reset Mail

> The **Request** must have the following structure:

```shell
curl -X POST \
  http://bla.local/api/v2/user/password/sendResetMail \
  -H 'Content-Type: application/json' \
  -d '{
	"email": "mail@siwecos.de"
}'
```

```http
POST /api/v2/user/password/sendResetMail HTTP/1.1
Host: bla.local
Content-Type: application/json

{
	"email": "mail@siwecos.de"
}
```

An [activated](#user-activation) user can reset his password.

> The **Response** has the following structure:

```json
{
  "message": "If the user exists in our records, the mail was sent."
}
```

### HTTP Request

`POST /api/v2/user/password/sendResetMail`

### Query Parameters

| Parameter | Type    | Description              |
| --------- | ------- | ------------------------ |
| email     | `email` | The user's email address |

### Response Status Codes

| Code | Meaning                                                                    |
| ---- | -------------------------------------------------------------------------- |
| 200  | Password-Reset email was sent if the activated user exists in the database |
| 422  | Validation failed                                                          |


## Reset Password

> The **Request** must have the following structure:

```shell
curl -X POST \
  http://bla.local/api/v2/user/password/reset \
  -H 'Content-Type: application/json' \
  -d '{
	"newpassword": "ABCD1234",
	"reset_token": "zVgL1Aa5N57L9CEnrpH8xsmKH983Ip3u9ElnjYuED08YR449999Y0j551iFg80m36ybdn3JTJTz22DhNZL87R76pIDw8O95n"
}'
```

```http
POST /api/v2/user/password/reset HTTP/1.1
Host: bla.local
Content-Type: application/json

{
	"newpassword": "ABCD1234",
	"reset_token": "zVgL1Aa5N57L9CEnrpH8xsmKH983Ip3u9ElnjYuED08YR449999Y0j551iFg80m36ybdn3JTJTz22DhNZL87R76pIDw8O95n"
}
```

The user can reset his password.

> The **Response** has the following structure:

```json
{
  "message": "Reset completed"
}
```

### HTTP Request

`POST /api/v2/user/password/reset`

### Query Parameters

| Parameter   | Type       | Description                                       |
| ----------- | ---------- | ------------------------------------------------- |
| newpassword | `password` | The user's new password                           |
| reset_token | `string`   | The associated reset token that was sent by email |

### Response Status Codes

| Code | Meaning                  |
| ---- | ------------------------ |
| 200  | Password reset completed |
| 404  | User not found           |
| 422  | Validation failed        |



## Update User Data

> The **Request** must have the following structure:

```shell
curl -X PATCH \
  http://bla.local/api/v2/user \
  -H 'Content-Type: application/json' \
  -H 'SIWECOS-Token: Y2jHgqtSVcz8eFqiV4eC0s5Y' \
  -d '{
	"email": "mail@siwecos.de",
	"preferred_language": "en",
	"newpassword": "ABCD1234"
}'
```

```http
PATCH /api/v2/user HTTP/1.1
Host: bla.local
Content-Type: application/json
SIWECOS-Token: Y2jHgqtSVcz8eFqiV4eC0s5Y

{
	"email": "mail@siwecos.de",
	"preferred_language": "en",
	"newpassword": "ABCD1234"
}
```

The user can update his details.

> The **Response** has the following structure:

```json
{
  "message": "User updated"
}
```

### HTTP Request

`PATCH /api/v2/user`

<aside class="notice">
Authentication via HTTP-Header <code>SIWECOS-Token</code> required.
</aside>

### Query Parameters

| Parameter            | Type         | Description                                 |
| -------------------- | ------------ | ------------------------------------------- |
| *email*              | *`email`*    | *The user's new email address*              |
| *newpassword*        | *`password`* | *The user's new password*                   |
| *preferred_language* | *`string`*   | *The user's preferred language for the app* |

### Response Status Codes

| Code | Meaning                   |
| ---- | ------------------------- |
| 200  | User updated              |
| 403  | `SIWECOS-Token` not valid |
| 422  | Validation failed         |



## User Deletion

> The **Request** must have the following structure:

```shell
curl -X DELETE \
  http://bla.local/api/v2/user \
  -H 'Content-Type: application/json' \
  -H 'SIWECOS-Token: Y2jHgqtSVcz8eFqiV4eC0s5Y' \
```

```http
DELETE /api/v2/user HTTP/1.1
Host: bla.local
Content-Type: application/json
SIWECOS-Token: Y2jHgqtSVcz8eFqiV4eC0s5Y

```

The user can delete his account.

> The **Response** has the following structure:

```json
{
  "message": "User deleted"
}
```

### HTTP Request

`DELETE /api/v2/user`

<aside class="notice">
Authentication via HTTP-Header <code>SIWECOS-Token</code> required.
</aside>


### Response Status Codes

| Code | Meaning                   |
| ---- | ------------------------- |
| 200  | User deleted              |
| 403  | `SIWECOS-Token` not valid |

<aside class="warning">
After deletion the associated <code>Token</code> with all the registered <code>Domain</code>s and <code>Scan</code>s will also be deleted.
</aside>
