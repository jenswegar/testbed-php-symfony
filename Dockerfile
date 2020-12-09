FROM php:7.4-apache

# Install Composer
COPY --from=composer /usr/bin/composer /usr/bin/composer

# Change docroot to support symfony folder structure
ENV APACHE_DOCUMENT_ROOT /var/www/public/

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Enable Apache modules
RUN a2enmod rewrite

# Install unzip utility and libs needed by zip PHP extension
RUN apt-get update && apt-get install -y \
    zlib1g-dev \
    libzip-dev \
    unzip
RUN docker-php-ext-install zip pdo pdo_mysql

COPY src/ /var/www/

WORKDIR /var/www

# install deps
RUN composer install --no-dev

# ensure existance & permissions for var folder
RUN mkdir -p /var/www/var
RUN chown -R www-data:www-data /var/www/var