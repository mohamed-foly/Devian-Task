FROM php:7.4-alpine

COPY . /app

RUN apk add --update \
    curl \
    php \
    php-opcache \
    php-openssl \
    php-pdo \
    php-json \
    php-phar \
    php-dom \
    && rm -rf /var/cache/apk/*

# RUN curl -sS https://getcomposer.org/installer | php --install-dir=/usr/bin --filename=composer

RUN cd /app 
# && composer install

WORKDIR /app
HEALTHCHECK CMD curl --fail http://localhost:80 || exit 1
CMD php artisan serve --host=0.0.0.0 --port=80
