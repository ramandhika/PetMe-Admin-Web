## Replicating Steps for PetMe Admin Web

To replicate this project on your local machine, follow these steps:

1. Clone the repository:

    ```bash
    git clone https://github.com/XnoahR/PetMe.git
    ```

2. Navigate to the project directory:

    ```bash
    cd Cloud Computing
    cd admin
    ```

3. Install the dependencies:

    ```bash
    composer install
    ```

4. Configure the environment variables:

    - Create a `.env` file in the root directory.
    - Add the necessary environment variables, such as database connection details, API keys, etc.

5. Generate the application key:

    ```bash
    php artisan key:generate
    ```

6. Migrate the database:

    ```bash
    php artisan migrate
    ```

7. Start the development server:

    ```bash
    php artisan serve
    ```

8. Open your web browser and visit `http://localhost:8000` to view the application.

## Deploying on Cloud Run using Cloud Build

To deploy this project on Google Cloud Run using Cloud Build, follow these steps:

1. Create a Dockerfile in the root directory of your project with the following content:

    ```Dockerfile
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

    # Install Composer
    RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

    # Copy the entire application to the WORKDIR
    COPY . .

    # Install PHP dependencies
    RUN composer install

    # Generate application key
    RUN if [ -f ".env.example" ]; then cp .env.example .env; fi
    RUN php artisan key:generate

    # Fill database details in .env file
    RUN sed -i 's/DB_HOST=127.0.0.1/DB_HOST=YOUR_HOST/' .env
    RUN sed -i 's/DB_PORT=3306/DB_PORT=3306/' .env
    RUN sed -i 's/DB_DATABASE=laravel/DB_DATABASE=YOUR_DATABASE/' .env
    RUN sed -i 's/DB_USERNAME=root/DB_USERNAME=YOUR_USERNAME/' .env
    RUN sed -i 's/DB_PASSWORD=/DB_PASSWORD=YOUR_PASSWORD/' .env
    RUN sed -i 's/APP_ENV=local/APP_ENV=production/' .env

    CMD php artisan serve --host=0.0.0.0 --port=8080
    ```

2. Build the Docker image using Cloud Build:

    ```bash
    gcloud builds submit --tag gcr.io/PROJECT-ID/petme
    ```

3. Deploy the Docker image to Cloud Run:

    ```bash
    gcloud run deploy --image gcr.io/PROJECT-ID/petme --platform managed
    ```

    Replace `PROJECT-ID` with your actual Google Cloud project ID.

4. Follow the prompts to select the project, region, and service name.

5. Once the deployment is complete, you will receive a URL where your application is accessible.
