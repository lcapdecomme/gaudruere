#!/bin/bash

mkdir -p ./web/bundles/gaudrueregite/js
mkdir -p ./web/bundles/gaudrueregite/css/images
cp -f ./src/Gaudruere/GiteBundle/Resources/public/js/*.js ./web/bundles/gaudrueregite/js/
cp -Rf ./src/Gaudruere/GiteBundle/Resources/public/css/* ./web/bundles/gaudrueregite/css
