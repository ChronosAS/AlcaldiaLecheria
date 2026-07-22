FROM php:8.2-fpm

# System deps
RUN apt-get update && apt-get install -y \
    git unzip libzip-dev libpng-dev libonig-dev libxml2-dev zlib1g-dev \
    libicu-dev libcurl4-openssl-dev pkg-config --no-install-recommends \
 && docker-php-ext-install pdo pdo_mysql mbstring zip exif pcntl bcmath gd \
 && rm -rf /var/lib/apt/lists/*

# Install composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy app
COPY . /var/www/html

# Install PHP deps
RUN composer install --no-interaction --prefer-dist --optimize-autoloader || true

RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 9000
CMD ["php-fpm"]
