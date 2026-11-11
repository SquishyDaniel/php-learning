# https://hub.docker.com/_/php#:~:text=Apache%20with%20a%20Dockerfile
FROM php:8.2-apache

RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN docker-php-ext-enable mysqli

COPY src/ /var/www/html/