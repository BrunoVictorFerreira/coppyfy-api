
FROM php:8.0.2-fpm-alpine as php

RUN apk update \
	&& apk add --no-cache --virtual .build-deps $PHPIZE_DEPS \	
	&& apk --no-cache add \
	postgresql-dev \    
    bash \
    zip \    
    libpng-dev \
    libwebp-dev \
    libzip-dev \
    freetype-dev \
    unzip \
    nano \
    libxml2-dev \
    libxslt-dev

RUN docker-php-ext-install pdo pdo_pgsql gd zip

RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer && \
    chmod +x /usr/local/bin/composer && \
    composer self-update --preview --version=1.10.7
RUN command -v composer

RUN echo 'expose_php = off' > /usr/local/etc/php/conf.d/hideheader.ini
RUN echo 'expose_php = off' > /usr/local/etc/php/hideheader.ini


# Clear package lists
RUN rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/html

# # Create the log file to be able to run tail
RUN touch /var/log/cron.log

# # Setup cron job
RUN (crontab -l;)
RUN echo "" > /etc/crontabs/root
RUN echo "* * * * * cd /var/www/html && /usr/local/bin/php artisan schedule:run >> /var/log/cron.log 2>&1" >> /etc/crontabs/root

COPY composer.json composer.json

COPY . .

RUN COMPOSER_MEMORY_LIMIT=-1 composer install

