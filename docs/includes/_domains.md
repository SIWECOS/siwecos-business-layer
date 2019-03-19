# Domains

## Adding a Domain

> The **Request** must have the following structure:

```shell
curl -X POST \
  http://bla.local/api/v2/domain \
  -H 'Content-Type: application/json' \
  -H 'SIWECOS-Token: 46rzR6TLJxtt7OrwLST+aTrc' \
  -d '{
    "url":"https://siwecos.de"
}'
```

```http
POST /api/v2/domain HTTP/1.1
Host: bla.local
Content-Type: application/json
SIWECOS-Token: 46rzR6TLJxtt7OrwLST+aTrc

{
    "url":"https://siwecos.de"
}
```

A new Domain can be added/registered to a Token.

> The **Response** has the following structure:

```json
{
    "domain": "siwecos.de",
    "url": "https://siwecos.de",
    "verification_token": "QsMNH613iGPScan554n7v0f4V29s6W5p9kzPOfA8oECH1Drejv7jpUE53i323tU8",
    "is_verified": false
}
```

### HTTP Request

`POST /api/v2/domain`

<aside class="notice">
Authentication via HTTP-Header <code>SIWECOS-Token</code> required.
</aside>

### Query Parameters

| Parameter | Type  | Description                                     |
| --------- | ----- | ----------------------------------------------- |
| url       | `url` | The url to the domain that should be registered |

### Response Status Codes

| Code | Meaning                                     |
| ---- | ------------------------------------------- |
| 200  | Domain created                              |
| 403  | Domain is already verified                  |
| 410  | Domain was not created / could not be saved |
| 422  | Validation failed                           |

<aside class="notice">
After registration the domain has to be verified.
</aside>

## Domain Verification

> The **Request** must have the following structure:

```shell
curl -X POST \
  http://bla.local/api/v2/domain/verify \
  -H 'Content-Type: application/json' \
  -d '{
    "url":"https://siwecos.de"
}'
```

```http
POST /api/v2/domain/verify HTTP/1.1
Host: bla.local
Content-Type: application/json

{
    "url":"https://siwecos.de"
}
```

Verify the associated Domain for the given `url`.

> The **Response** has the following structure:

```json
{
    "domain": "siwecos.de",
    "url": "https://siwecos.de",
    "verification_token": "QsMNH613iGPScan554n7v0f4V29s6W5p9kzPOfA8oECH1Drejv7jpUE53i323tU8",
    "is_verified": true
}
```

### HTTP Request

`POST /api/v2/domain/verify`


### Query Parameters

| Parameter | Type  | Description                                   |
| --------- | ----- | --------------------------------------------- |
| url       | `url` | The url to the domain that should be verified |

### Response Status Codes

| Code | Meaning                      |
| ---- | ---------------------------- |
| 200  | Domain verified              |
| 403  | Domain is already verified   |
| 410  | Domain could not be verified |
| 422  | Validation failed            |

<aside class="notice">
The domain can either be verified by <code>&lt;meta&gt;</code>-Tag or HTML-Page. <a href="https://siwecos.de/wiki/Domain-Verification/EN" target="_blank">[Further information]</a>
</aside>


## Listing all Domains

> The **Request** must have the following structure:

```shell
curl -X GET \
  http://bla.local/api/v2/domain \
  -H 'SIWECOS-Token: 46rzR6TLJxtt7OrwLST+aTrc'
```

```http
GET /api/v2/domain HTTP/1.1
Host: bla.local
SIWECOS-Token: 46rzR6TLJxtt7OrwLST+aTrc

```

Returning a list of `domains` for the specified `SIWECOS-Token`.

> The **Response** has the following structure:

```json
{
    "domains": [
        {
            "domain": "siwecos.de",
            "url": "https://siwecos.de",
            "verification_token": "QsMNH613iGPScan554n7v0f4V29s6W5p9kzPOfA8oECH1Drejv7jpUE53i323tU8",
            "is_verified": false
        },
        {
            "domain": "lednerb.eu",
            "url": "https://lednerb.eu",
            "verification_token": "9r0Ei2ZG14PGXoN6T32BHid0GWCKiPP0R3LDZo7U8oE2z5JaBL80k5n1284Pql7I",
            "is_verified": true
        }
    ]
}
```

### HTTP Request

`GET /api/v2/domain`

<aside class="notice">
Authentication via HTTP-Header <code>SIWECOS-Token</code> required.
</aside>


### Response Status Codes

| Code | Meaning                   |
| ---- | ------------------------- |
| 200  | List of domains returned  |
| 403  | `SIWECOS-Token` not valid |



## Deleting a Domain

> The **Request** must have the following structure:

```shell
curl -X DELETE \
  http://bla.local/api/v2/domain \
  -H 'Content-Type: application/json' \
  -d '{
	"url": "https://siwecos.de"
}'
```

```http
DELETE /api/v2/domain HTTP/1.1
Host: bla.local
Content-Type: application/json

{
	"url": "https://siwecos.de"
}
```

A Domain can be deleted.

> The **Response** has the following structure:

```json
{
    "message": "Domain deleted"
}
```

### HTTP Request

`DELETE /api/v2/domain`

<aside class="notice">
Authentication via HTTP-Header <code>SIWECOS-Token</code> required.
</aside>

### Query Parameters

| Parameter | Type  | Description                                  |
| --------- | ----- | -------------------------------------------- |
| url       | `url` | The url to the domain that should be deleted |

### Response Status Codes

| Code | Meaning           |
| ---- | ----------------- |
| 200  | Domain deleted    |
| 403  | Forbidden         |
| 422  | Validation failed |

<aside class="warning">
After deletion all associated scans will also be deleted.
</aside>
