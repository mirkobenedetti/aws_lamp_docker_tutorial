FROM php:7.2.4-apache
COPY index.php /var/www/html
RUN docker-php-ext-install mysqli
