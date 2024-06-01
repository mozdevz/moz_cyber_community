FROM php:7.3-apache

COPY ./public /var/www/html
RUN apt-get update && apt-get install -y zlib1g-dev libzip-dev && docker-php-ext-install zip
RUN mkdir /var/www/tmp
RUN chmod -R 755 /var/www/html
RUN chown -R root:root /var/www/html
RUN chown www-data:www-data /var/www/tmp
ENV FLAG "flag{fakE_sesS!0ns_@rE_V3rY_COOL!}"

EXPOSE 80