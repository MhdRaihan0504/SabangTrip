# Menggunakan image PHP
FROM php:8.3-fpm

# Set working directory
WORKDIR /var/www

# Menyalin file proyek
COPY . .

# Menginstal dependensi
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd

# Menginstal Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install dependencies
RUN composer install

# Set hak akses
RUN chown -R www-data:www-data /var/www

# Jalankan server
CMD ["php-fpm"]
