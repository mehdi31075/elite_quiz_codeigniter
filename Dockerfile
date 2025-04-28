FROM php:8.1-apache

# Install mod_rewrite and other dependencies if necessary
RUN a2enmod rewrite

# Install any other required PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Restart Apache to apply the changes
RUN service apache2 restart
