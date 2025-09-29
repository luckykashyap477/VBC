# Use official PHP image
FROM php:8.2-apache

# Copy your app
COPY . /var/www/html/

# Expose port 80
EXPOSE 80
