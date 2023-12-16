# Use an official PHP runtime as the base image
FROM php:8.2-apache


# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN docker-php-ext-install pdo_mysql mbstring

# Set the working directory in the container
WORKDIR /app
COPY composer.json .
RUN composer install --no-scripts
COPY . .

CMD php artisan serve --host=0.0.0.0 --port=8000
