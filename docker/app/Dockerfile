FROM php:8.1-fpm

RUN apt update && apt install -y libpng-dev
RUN docker-php-ext-install gd
RUN apt install -y \
    libc6 \
    # php7.3-gd=7.3.9-1~deb10u1 \
    libmcrypt-dev \
    libpq-dev \
    # git \
    libzip-dev\
    zlib1g-dev \
    ;

RUN docker-php-ext-install opcache
RUN docker-php-ext-install pdo pdo_pgsql pgsql
RUN docker-php-ext-install zip

RUN apt-get update && apt-get install -y libmagickwand-dev --no-install-recommends && rm -rf /var/lib/apt/lists/*
RUN printf "\n" | pecl install imagick
RUN docker-php-ext-enable imagick


RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

ADD ./php.ini 			/usr/local/etc/php/php.ini
ADD ./php-fpm.conf 		/usr/local/etc/php-fpm.conf



RUN mkdir -p /app/
RUN   echo 'php() { if [[ $@ == "artisan tinker" ]]; then command php artisan tinker --ansi; else command php "$@"; fi; }' >> ~/.bashrc
WORKDIR  /app/


EXPOSE 9000
CMD make build && php-fpm