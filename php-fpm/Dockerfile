FROM php:8.1.1-fpm

RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install mysqli pdo pdo_mysql
RUN mv /usr/local/etc/php/php.ini-development /usr/local/etc/php/php.ini
WORKDIR /var/www/html
