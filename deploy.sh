!#/bin/bash
docker build . -t siwecos/siwecos-business-layer:dev
docker push siwecos/siwecos-business-layer:dev
kubectl patch deployment siwecos-business-layer-staging -p \
  "{\"spec\":{\"template\":{\"metadata\":{\"labels\":{\"date\":\"`date +'%s'`\"}}}}}"