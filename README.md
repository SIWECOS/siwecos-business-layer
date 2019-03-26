# SIWECOS-Business-Layer

[![Build Status](https://travis-ci.org/SIWECOS/siwecos-business-layer.svg?branch=master)](https://travis-ci.org/SIWECOS/siwecos-business-layer)

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
| `critical` | Failed to start scan for scan id: `{ID}` | `ScanStartJob` |
