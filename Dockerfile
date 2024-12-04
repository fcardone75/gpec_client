# Use the official PHP image as the base image
FROM fc75/php-composer-base

# Set the working directory
WORKDIR /var/www/html

COPY . .

RUN composer install \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R 777 /var/www/html
# Expose port 80
EXPOSE 80
