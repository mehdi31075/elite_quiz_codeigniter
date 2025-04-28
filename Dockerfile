FROM php:8.1-apache

# Enable mod_rewrite and restart Apache
RUN a2enmod rewrite \
    && service apache2 restart

# Install any required PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Expose port 80
EXPOSE 80
