# Use the official PHP image as the base image
FROM php:7.4-apache

# Install additional dependencies if needed
# For example, if your PHP application requires specific extensions:
# RUN docker-php-ext-install pdo pdo_mysql

# Copy your PHP files into the container's web root directory
COPY . /var/www/html/

# Expose port 80 for HTTP traffic
EXPOSE 80

# Start the Apache web server
CMD ["apache2-foreground"]
