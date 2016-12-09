#!/usr/bin/env bash

docker build -t pimf-blog-app .
docker run -d -p 1337:1337 pimf-blog-app
