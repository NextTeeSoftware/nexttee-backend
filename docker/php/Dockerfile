FROM php:7.1-fpm
# Install Debian packages and PHP extensions
RUN apt-get update && apt-get install -y libmcrypt-dev \
    mysql-client libmagickwand-dev --no-install-recommends \
    && pecl install imagick \
    && docker-php-ext-enable imagick \
    && docker-php-ext-install -j$(nproc) mcrypt pdo_mysql
WORKDIR /app