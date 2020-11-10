#!/bin/bash

docker run -itd --rm --name php -v $(pwd):/var/www/html -p 8080:80 php:5.6-apache
