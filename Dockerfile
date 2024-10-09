# Menggunakan image PHP sebagai base
FROM php:8.3-fpm

# Install dependensi sistem
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    curl \
    libonig-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd mbstring

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

# Menyalin kode aplikasi
COPY . /var/www

# Set working directory
WORKDIR /var/www

# Install aplikasi Laravel
RUN composer install --no-scripts -vvv
