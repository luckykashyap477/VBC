# Use official PHP image
FROM php:8.2-apache

# Install dependencies for mysqli
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Copy your app
COPY . /var/www/html/

# Expose port 80
EXPOSE 80
