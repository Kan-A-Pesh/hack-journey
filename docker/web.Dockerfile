FROM php:8.1-apache

RUN apt-get update && \
    apt-get install --yes --force-yes \
    cron g++ gettext libicu-dev openssl \
    libc-client-dev libmcrypt-dev \
    libtidy-dev libcurl4-openssl-dev \
    libz-dev libmemcached-dev git-core libpq-dev \
    libzip4 libzip-dev libwebp-dev

# Install a "php-extension-installer" (https://github.com/mlocati/docker-php-extension-installer)
COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/local/bin/

# Enable SQLite3 extension
RUN install-php-extensions sqlite3

# Enable Apache2 mod_rewrite
RUN a2enmod rewrite

EXPOSE 80

WORKDIR /var/www/html
COPY ./src /var/www/html/

CMD ["apache2-foreground"]
