# Use the official PHP image as the base image
FROM php:7.4-apache

# Copy your application files to the container's web directory
COPY . /var/www/html/

# Install PDO extension for MySQL
RUN docker-php-ext-install pdo pdo_mysql
