# Scans

## Starting a Freescan

> The **Request** must have the following structure:

```shell
curl -X POST \
  http://bla.local/api/v2/freescan \
  -H 'Content-Type: application/json' \
  -d '{
	"url": "https://siwecos.de"
}'
```

```http
POST /api/v2/freescan HTTP/1.1
Host: bla.local
Content-Type: application/json

{
	"url": "https://siwecos.de"
}
```

A Freescan can be started.

<aside class="notice">
A Freescan is like a normal Scan but with a lower `dangerLevel` so it does not include all tests.
</aside>



> The **Response** has the following structure:

```json
{
    "scan_id": 6
}
```

### HTTP Request

`POST /api/v2/freescan`

<aside class="notice">
A Freescan can be started by everyone and the reports can be getted by everyone, too.
</aside>

### Query Parameters

| Parameter | Type  | Description                                  |
| --------- | ----- | -------------------------------------------- |
| url       | `url` | The url to the domain that should be scanned |

### Response Parameters

| Parameter | Type      | Description      |
| --------- | --------- | ---------------- |
| scan_id   | `integer` | The scan's `id`. |

### Response Status Codes

| Code | Meaning           |
| ---- | ----------------- |
| 200  | Scan started      |
| 422  | Validation failed |


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

<aside class="notice">
A Freescan can be started by everyone and the reports can be getted by everyone, too.
</aside>

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

