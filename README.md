# SIWECOS-Business-Layer

![API DOCS](https://img.shields.io/badge/API-DOCS-blue.svg?style=for-the-badge&link=https://siwecos.github.io/siwecos-business-layer&logo=data:image/svg+xml;base64,PHN2ZyBhcmlhLWhpZGRlbj0idHJ1ZSIgZm9jdXNhYmxlPSJmYWxzZSIgZGF0YS1wcmVmaXg9ImZhcyIgZGF0YS1pY29uPSJib29rIiBjbGFzcz0ic3ZnLWlubGluZS0tZmEgZmEtYm9vayBmYS13LTE0IiByb2xlPSJpbWciIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmlld0JveD0iMCAwIDQ0OCA1MTIiPjxwYXRoIGZpbGw9IiNmZmZmZmYiIGQ9Ik00NDggMzYwVjI0YzAtMTMuMy0xMC43LTI0LTI0LTI0SDk2QzQzIDAgMCA0MyAwIDk2djMyMGMwIDUzIDQzIDk2IDk2IDk2aDMyOGMxMy4zIDAgMjQtMTAuNyAyNC0yNHYtMTZjMC03LjUtMy41LTE0LjMtOC45LTE4LjctNC4yLTE1LjQtNC4yLTU5LjMgMC03NC43IDUuNC00LjMgOC45LTExLjEgOC45LTE4LjZ6TTEyOCAxMzRjMC0zLjMgMi43LTYgNi02aDIxMmMzLjMgMCA2IDIuNyA2IDZ2MjBjMCAzLjMtMi43IDYtNiA2SDEzNGMtMy4zIDAtNi0yLjctNi02di0yMHptMCA2NGMwLTMuMyAyLjctNiA2LTZoMjEyYzMuMyAwIDYgMi43IDYgNnYyMGMwIDMuMy0yLjcgNi02IDZIMTM0Yy0zLjMgMC02LTIuNy02LTZ2LTIwem0yNTMuNCAyNTBIOTZjLTE3LjcgMC0zMi0xNC4zLTMyLTMyIDAtMTcuNiAxNC40LTMyIDMyLTMyaDI4NS40Yy0xLjkgMTcuMS0xLjkgNDYuOSAwIDY0eiI+PC9wYXRoPjwvc3ZnPgo=)

## API-Documentation

You can find a builded draft for the API V2 here: https://siwecos-bla-api-v2-documentation.netlify.com/

### Editing the API-Documentation via Docker

See this project for a How-To use the Docker `slate` image: https://github.com/davidheryanto/slate-docker

Make sure you first bild the image and than run the `docker run` command in the actual `siwecos-business-layer` directory on the latest `develop` branch.


### Testing via Postman

The `BLA.postman_collection.json` file can be loaded via [Postman](https://www.getpostman.com/) to test the API manually and see the examples.


### Error logs

The app generates the following logs in case of errors or failures.

| Type       | Message                                  | Source         |
| ---------- | ---------------------------------------- | -------------- |
| `critical` | Failed to start scan for scan id: `{ID}` | `StartScanJob` |
