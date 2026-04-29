FROM php:8.1-apache

# Enable mysqli extension for MySQL
RUN docker-php-ext-install mysqli

# Copy all project files into Apache web root
COPY . /var/www/html/

# Set correct permissions
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
