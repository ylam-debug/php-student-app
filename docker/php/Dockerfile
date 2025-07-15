FROM php:8.2-apache

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

COPY docker/php/index.html /var/www/html/index.html
COPY docker/php/register.php /var/www/html/register.php

EXPOSE 80
