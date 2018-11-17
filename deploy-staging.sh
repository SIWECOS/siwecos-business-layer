!#/bin/bash
docker build . -t siwecos/siwecos-business-layer:staging
docker push siwecos/siwecos-business-layer:staging
