# Menggunakan image PHP sebagai base
FROM php:8.3-fpm

# Menyalin kode aplikasi
COPY . /var/www

# Set working directory
WORKDIR /var/www

# Install dependencies
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install aplikasi Laravel
RUN composer install --no-scripts --no-autoloader
