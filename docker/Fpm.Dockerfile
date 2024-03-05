FROM php:8.2-fpm

RUN apt-get update \
    && docker-php-ext-install pdo_mysql

WORKDIR /var/www/laravel-docker

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
