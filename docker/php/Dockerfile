FROM php:8.2-apache

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

COPY index.html /var/www/html/index.html
COPY register.php /var/www/html/register.php

EXPOSE 80
