# Domains

## Adding a Domain

> The **Request** must have the following structure:

```shell
curl -X POST \
  http://bla.local/api/v2/domain \
  -H 'Content-Type: application/json' \
  -H 'SIWECOS-Token: 46rzR6TLJxtt7OrwLST+aTrc' \
  -d '{
    "domain": "siwecos.de"
}'
```

```http
POST /api/v2/domain HTTP/1.1
Host: bla.local
Content-Type: application/json
SIWECOS-Token: 46rzR6TLJxtt7OrwLST+aTrc

{
    "domain": "siwecos.de"
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

### Request Parameters

| Parameter | Type     | Description                          |
| --------- | -------- | ------------------------------------ |
| domain    | `string` | The domain that should be registered |

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
    "domain": "siwecos.de"
}'
```

```http
POST /api/v2/domain/verify HTTP/1.1
Host: bla.local
Content-Type: application/json

{
    "domain": "siwecos.de"
}
```

Verify the associated Domain for the given `domain`.

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


### Request Parameters

| Parameter | Type     | Description                        |
| --------- | -------- | ---------------------------------- |
| domain    | `string` | The domain that should be verified |

### Response Status Codes

| Code | Meaning                       |
| ---- | ----------------------------- |
| 200  | Domain verified               |
| 403  | Domain is already verified    |
| 404  | Domain could not be verified  |
| 409  | Domain verification exception |
| 422  | Validation failed             |

<aside class="notice">
The domain can either be verified by <code>&lt;meta&gt;</code>-Tag or HTML-Page. <a href="https://siwecos.de/wiki/Domain-Verification/EN" target="_blank">[Further information]</a>
</aside>

<aside class="notice">
The HTTP error code <code>404</code> will be returned if the verification token could not be found.<br>
The HTTP error code <code>409</code> will be returned if the domain host could not be reached [Connection Issues, TLS-Problems, HTTP-Responses with 5xx codes, etc.]
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



## Requesting Domain Details

> The **Request** must have the following structure:

```shell
curl -X GET \
  http://bla.local/api/v2/domain/siwecos.de \
  -H 'SIWECOS-Token: 46rzR6TLJxtt7OrwLST+aTrc'
```

```http
GET /api/v2/domain/siwecos.de HTTP/1.1
Host: bla.local
SIWECOS-Token: 46rzR6TLJxtt7OrwLST+aTrc

```

Returning the details for a specified `Domain`.

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

`GET /api/v2/domain/{domain}`

<aside class="notice">
Authentication via HTTP-Header <code>SIWECOS-Token</code> required.
</aside>


### Response Status Codes

| Code | Meaning                   |
| ---- | ------------------------- |
| 200  | Domain details returned   |
| 403  | `SIWECOS-Token` not valid |
| 404  | Domain not found          |


## Deleting a Domain

> The **Request** must have the following structure:

```shell
curl -X DELETE \
  http://bla.local/api/v2/domain \
  -H 'Content-Type: application/json' \
  -d '{
	"domain": "siwecos.de"
}'
```

```http
DELETE /api/v2/domain HTTP/1.1
Host: bla.local
Content-Type: application/json

{
	"domain": "siwecos.de"
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

### Request Parameters

| Parameter | Type     | Description                       |
| --------- | -------- | --------------------------------- |
| domain    | `string` | The domain that should be deleted |

### Response Status Codes

| Code | Meaning           |
| ---- | ----------------- |
| 200  | Domain deleted    |
| 403  | Forbidden         |
| 422  | Validation failed |

<aside class="warning">
After deletion all associated scans will also be deleted.
</aside>

## Retrieving the latest Scan Report

> The **Request** must have the following structure:

```shell
curl -X GET \
  http://bla.local/api/v2/domain/example.org/report/en \
  -H 'SIWECOS-Token: 46rzR6TLJxtt7OrwLST+aTrc'
```

```http
GET /api/v2/domain/example.org/report/en HTTP/1.1
Host: bla.local
SIWECOS-Token: 46rzR6TLJxtt7OrwLST+aTrc

```

Retrieving the latest Scan Report for the given Domain.

> The **Response** has the same structure as the [Scan Report](#retrieving-the-scan-report)


### HTTP Request

`GET /api/v2/domain/{domain}/report/{language?}`

<aside class="notice">
Authentication via HTTP-Header <code>SIWECOS-Token</code> is required for non-free Scans.
</aside>

<aside class="notice">
If no non-free Scan was found but a free Scan, the free Scan will be returned instead.
</aside>

### Request Parameters

| Parameter       | Type       | Description                                                                |
| --------------- | ---------- | -------------------------------------------------------------------------- |
| domain          | `string`   | The domain the report is requested for                                     |
| *language_code* | *`string`* | *One of the supported language codes for translated results: `de` or `en`* |

### Response Status Codes

| Code | Meaning            |
| ---- | ------------------ |
| 200  | Latest Scan Report |
| 404  | No scan found      |

## Retrieving the sealproof data

> The **Request** must have the following structure:

```shell
curl -X GET \
  "http://bla.local/api/v2/domain/example.org/sealproof"
```

```http
GET /api/v2/domain/example.org/sealproof HTTP/1.1
Host: bla.local

```

The data for the SIWECOS sealproof can be requested.

> The **Response** has the following structure:

```json
{
  "domain": "example.org",
  "score": 82,
  "finished_at": "2019-04-09T05:58:55Z"
}
```

### HTTP Request

`GET /api/v2/domain/{domain}/sealproof`

<aside class="notice">
In order to retrieve the data, a Domain must be verified and at least one non-free Scan must be finished.
</aside>

### Request Parameters

| Parameter | Type     | Description                            |
| --------- | -------- | -------------------------------------- |
| domain    | `string` | The domain for the requested sealproof |


### Response Status Codes

| Code | Meaning             |
| ---- | ------------------- |
| 200  | OK                  |
| 404  | Scan not found      |
| 409  | Domain not verified |
