FROM php:7.4-apache

# Install Composer
COPY --from=composer /usr/bin/composer /usr/bin/composer

# Change docroot to support symfony folder structure
ENV APACHE_DOCUMENT_ROOT /var/www/public/

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

COPY src/ /var/www/

WORKDIR /var/www

# install deps
RUN composer install --no-dev

# ensure existance & permissions for var folder
RUN mkdir -p /var/www/var
RUN chown -R www-data:www-data /var/www/var