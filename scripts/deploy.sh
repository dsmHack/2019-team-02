#! /bin/bash

if [ "$TRAVIS_BRANCH" = "master" ] && [ "$TRAVIS_PULL_REQUEST" = "false" ]; then

  gcloud beta functions deploy helloWorld --runtime nodejs8 --trigger-http --source dist/index.js

fi
