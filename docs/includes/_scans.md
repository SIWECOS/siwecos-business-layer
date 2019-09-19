# Scans

## Starting a Freescan

> The **Request** must have the following structure:

```shell
curl -X POST \
  http://bla.local/api/v2/freescan \
  -H 'Content-Type: application/json' \
  -d '{
	"domain": "siwecos.de"
}'
```

```http
POST /api/v2/freescan HTTP/1.1
Host: bla.local
Content-Type: application/json

{
	"domain": "siwecos.de"
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

| Parameter | Type     | Description                       |
| --------- | -------- | --------------------------------- |
| domain    | `string` | The domain that should be scanned |

### Response Parameters

| Parameter | Type      | Description     |
| --------- | --------- | --------------- |
| scan_id   | `integer` | The scan's `id` |

### Response Status Codes

| Code | Meaning           |
| ---- | ----------------- |
| 200  | Scan started      |
| 422  | Validation failed |


## Starting a Scan

> The **Request** must have the following structure:

```shell
curl -X POST \
  http://bla.local/api/v2/freescan \
  -H 'Content-Type: application/json' \
  -H 'SIWECOS-Token: Y2jHgqtSVcz8eFqiV4eC0s5Y' \
  -d '{
	"domain": "siwecos.de"
}'
```

```http
POST /api/v2/scan HTTP/1.1
Host: bla.local
Content-Type: application/json
SIWECOS-Token: Y2jHgqtSVcz8eFqiV4eC0s5Y

{
	"domain": "siwecos.de"
}
```

A regular scan can be started for a registered domain.

> The **Response** has the following structure:

```json
{
    "scan_id": 3
}
```

### HTTP Request

`POST /api/v2/scan`

<aside class="notice">
Authentication via HTTP-Header <code>SIWECOS-Token</code> required.
</aside>

### Query Parameters

| Parameter | Type     | Description                       |
| --------- | -------- | --------------------------------- |
| domain    | `string` | The domain that should be scanned |

### Response Parameters

| Parameter | Type      | Description     |
| --------- | --------- | --------------- |
| scan_id   | `integer` | The scan's `id` |

### Response Status Codes

| Code | Meaning                                   |
| ---- | ----------------------------------------- |
| 200  | Scan started                              |
| 404  | Associated Domain not found or unverified |
| 422  | Validation failed                         |



## Retrieving the Scan Status

> The **Request** must have the following structure:

```shell
curl -X GET \
  http://bla.local/api/v2/scan/3913 \
  -H 'Content-Type: application/json' \
  -H 'SIWECOS-Token: Y2jHgqtSVcz8eFqiV4eC0s5Y'
```

```http
GET /api/v2/scan/3913 HTTP/1.1
Host: bla.local
SIWECOS-Token: Y2jHgqtSVcz8eFqiV4eC0s5Y
Content-Type: application/json

```

The scan status can be requested.

> The **Response** has the following structure:

```json
{
  "id": 1,
  "status": "running",
  "has_error": false,
  "started_at": "2019-04-09T05:28:43Z",
  "finished_at": null
}
```

### HTTP Request

`GET /api/v2/scan/{scan_id}`

<aside class="notice">
Authentication via HTTP-Header <code>SIWECOS-Token</code> is required for non-freescans.
</aside>

### Query Parameters

| Parameter | Type      | Description                                                  |
| --------- | --------- | ------------------------------------------------------------ |
| scan_id   | `integer` | The scan's `id`. It's returned when you request a scan start |

### Response Parameters

| Parameter   | Type      | Description                                                                            |
| ----------- | --------- | -------------------------------------------------------------------------------------- |
| status      | `string`  | The status can be: `created`, `running`, `finished` or `failed`                        |
| has_error   | `boolean` | Determines if the scan had an error                                                    |
| started_at  | `date`    | DateTime String for the start time (when the scan was dispatched to the Core-API)      |
| finished_at | `date`    | DateTime String for the finished time (when the result was received from the Core-API) |

### Response Status Codes

| Code | Meaning               |
| ---- | --------------------- |
| 200  | Scan status retrieved |
| 403  | Forbidden             |
| 404  | Scan not found        |
| 422  | Validation failed     |



## Retrieving the Scan Report

> The **Request** must have the following structure:

```shell
curl -X POST \
  http://bla.local/api/v2/scan/3913/en \
  -H 'Content-Type: application/json' \
  -H 'SIWECOS-Token: Y2jHgqtSVcz8eFqiV4eC0s5Y'
```

```http
POST /api/v2/scan/3913/en HTTP/1.1
Host: bla.local
SIWECOS-Token: Y2jHgqtSVcz8eFqiV4eC0s5Y
Content-Type: application/json

```

The scan report can be requested.

> The **Response** has the following structure:

```json
{
  "id": 1,
  "status": "finished",
  "has_error": false,
  "started_at": "2019-04-09T05:28:43Z",
  "finished_at": "2019-04-09T05:58:55Z",
  "score": 87,
  "report": [
    // Core-API Report for different Scanners
    // For documentation purposes only the siwecos/HSHS-DOMXSS-Scanner results are listed here
    {
      "scanner_name": "Header Scanner",
      "scanner_code": "HEADER",
      "score": 85,
      "has_error": false,
      "error_message": null,
      "started_at": "2019-04-09T05:28:50Z",
      "finished_at": "2019-04-09T05:28:56Z",
      "tests": [
        // for documentation purpose only one test is listed here
        {
          "headline": "Check of HSTS protection",
          "score": 100,
          "has_error": false,
          "result": "Your website can only be reached via the secure HTTPS protocol. Communication between your website and its visitors can not be intercepted or manipulated.",
          "result_details": [
              "The value of 'max-age' is greater than 6 months."
          ],
          "result_description": null,
          "solution_tips": "<p>If the connection to your page is not encrypted, all communication between your site and its users can be intercepted and manipulated. </p><p>max-age=63072000; includeSubdomains; HTTP Strict Transport Security (HSTS) is a web security policy mechanism that is easy to integrate. </p> <b>--snip</b><pre> # Activate HTTP Strict Transport Security (HSTS) # Required: \"max-age\" # Optional: \"includeSubDomains\"</pre> <pre>  <b>Header set Strict-Transport-Security \"max-age=31556926; includeSubDomains\"</b> </pre> <p><b>--snap</b> </p><p>Here is an example of an .htaccess file which will set the <b>Header Scanner</b> to green. (<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Htaccess/EN\" title=\"Htaccess/EN\">.htaccess example</a>) </p>",
          "information_link": "https://siwecos.de/wiki/No-Encryption-Found/EN"
        }
      ]
    }
  ]
}
```

### HTTP Request

`POST /api/v2/scan/{scan_id}/{language_code}`

<aside class="notice">
Authentication via HTTP-Header <code>SIWECOS-Token</code> is required for non-freescans.
</aside>

### Query Parameters

| Parameter       | Type       | Description                                                                |
| --------------- | ---------- | -------------------------------------------------------------------------- |
| scan_id         | `integer`  | The scan's `id`. It's returned when you request a scan start               |
| *language_code* | *`string`* | *One of the supported language codes for translated results: `de` or `en`* |

### Response Parameters

| Parameter   | Type      | Description                                                                            |
| ----------- | --------- | -------------------------------------------------------------------------------------- |
| status      | `string`  | The status can be: `finished`                                                          |
| has_error   | `boolean` | Determines if the scan had an error                                                    |
| started_at  | `date`    | DateTime String for the start time (when the scan was dispatched to the Core-API)      |
| finished_at | `date`    | DateTime String for the finished time (when the result was received from the Core-API) |
| report      | `array`   | Array of translated and formatted scan results that where delivered by the Core-API    |

### Response Status Codes

| Code | Meaning               |
| ---- | --------------------- |
| 200  | Scan status retrieved |
| 403  | Forbidden             |
| 404  | Scan not found        |
| 422  | Validation failed     |


## Retrieving the Scan Report as PDF

> The **Request** must have the following structure:

```shell
curl -X POST \
  -H 'Content-Type: application/json' \
  -d '{
	  "SIWECOS-Token": "Y2jHgqtSVcz8eFqiV4eC0s5Y"
  }' \
  "http://bla.local/api/v2/scan/3913/en/pdf"
```

```http
POST /api/v2/scan/3913/en/pdf HTTP/1.1
Host: bla.local
Content-Type: application/json

{
  "SIWECOS-Token": "Y2jHgqtSVcz8eFqiV4eC0s5Y"
}
```

The scan report can be requested as a PDF file.

> A PDF file will be downloaded.


### HTTP Request

`POST /api/v2/scan/{scan_id}/{language_code}/pdf`

<aside class="notice">
Authentication via HTTP-Post-Parameter <code>SIWECOS-Token</code> is required for non-freescans.
</aside>

### Query Parameters

| Parameter       | Type       | Description                                                              |
| --------------- | ---------- | ------------------------------------------------------------------------ |
| scan_id         | `integer`  | The scan's `id`. It's returned when you request a scan start             |
| language_code   | `string`   | One of the supported language codes for translated results: `de` or `en` |
| *SIWECOS-Token* | *`string`* | *SIWECOS-Token for non-freescans*                                        |

### Response Status Codes

| Code | Meaning           |
| ---- | ----------------- |
| 200  | PDF Report        |
| 403  | Forbidden         |
| 404  | Scan not found    |
| 409  | Scan not finished |

