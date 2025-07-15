FROM php:8.2-apache

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

COPY docker/html/index.html /var/www/html/index.html
COPY docker/src/register.php /var/www/html/register.php

EXPOSE 80
