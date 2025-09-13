FROM php:8.2-fpm-alpine

# Install dependencies
RUN apk add --no-cache \
    git \
    libzip-dev \
    libpng-dev \
    jpeg-dev \
    mysql-client \
    oniguruma-dev \
    nodejs npm \ 
    $PHPIZE_DEPS \
    && docker-php-ext-install pdo_mysql exif pcntl zip \
    && docker-php-ext-configure gd --with-jpeg \
    && docker-php-ext-install gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html