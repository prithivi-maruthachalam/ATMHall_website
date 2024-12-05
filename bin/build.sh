#!/usr/bin/env bash

echo "Building static site..."
docker-compose up -d dev-server
rm -rf docs/*.html
rm -rf docs/*.css
rm -rf docs/*.jgp
rm -rf docs/*.jgep
rm -rf docs/*.JPG
wget \
  --mirror \
  --convert-links \
  --adjust-extension \
  --page-requisites \
  --no-parent \
  --recursive \
  --cut-dirs=10 \
  --no-host-directories \
  http://localhost:8090 -P ./docs
docker-compose down
