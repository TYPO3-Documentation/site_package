#!/bin/bash

curl -X 'POST' \
  'https://get.typo3.org/api/v1/sitepackage/' \
  -H 'accept: application/zip' \
  -H 'Content-Type: application/json' \
  -d @"$(dirname "$0")/data.json" --output my_site_package.zip

rm -rf Classes
rm -rf Configuration
rm -rf ContentBlocks
rm -rf Initialisation
rm -rf Resources
unzip -o my_site_package.zip
rm my_site_package.zip
