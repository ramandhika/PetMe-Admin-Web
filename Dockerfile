# Use an official PHP runtime as the base image
FROM php:8.2-apache

WORKDIR /app

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    default-mysql-client


RUN docker-php-ext-install pdo_mysql

# Install Node.js and npm
# RUN curl -sL https://deb.nodesource.com/setup_14.x | bash - \
#     && apt-get install -y nodejs

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy the entire application to the WORKDIR
COPY . .

# Install PHP dependencies
RUN composer install

# Install JavaScript dependencies
# RUN npm install

# Generate application key
RUN if [ -f ".env.example" ]; then cp .env.example .env; fi
RUN php artisan key:generate
RUN php artisan jwt:secret

# Fill database details in .env file
RUN sed -i 's/DB_HOST=127.0.0.1/DB_HOST=34.101.246.89/' .env
RUN sed -i 's/DB_PORT=3306/DB_PORT=3306/' .env
RUN sed -i 's/DB_DATABASE=laravel/DB_DATABASE=smartblaze-db/' .env
RUN sed -i 's/DB_USERNAME=root/DB_USERNAME=root/' .env
RUN sed -i 's/DB_PASSWORD=/DB_PASSWORD=/' .env



CMD php artisan serve --host=0.0.0.0 --port=8080
