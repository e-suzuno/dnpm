FROM php:8.0.2-fpm

RUN apt-get update && \
    apt-get install -y \
        libicu-dev libonig-dev libzip-dev \
        vim curl wget zip unzip && \
    apt-get clean

RUN docker-php-ext-install pdo_mysql zip mbstring


# composer install
COPY --from=composer:2.0 /usr/bin/composer /usr/bin/composer
RUN composer -v

# nodejs, npm install
RUN curl -sL https://deb.nodesource.com/setup_15.x | bash - \
&& apt-get install -y nodejs
RUN nodejs -v && npm -v
RUN npm -g install n
RUN n --version
RUN n stable
RUN nodejs -v && node -v && npm -v


# xdebug

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug


WORKDIR /var/www/html/



