!#/bin/bash
docker build . -t siwecos/siwecos-business-layer:staging
docker push siwecos/siwecos-business-layer:staging
kubectl patch deployment siwecos-business-layer-staging --namespace staging -p \
  "{\"spec\":{\"template\":{\"metadata\":{\"labels\":{\"date\":\"`date +'%s'`\"}}}}}"
