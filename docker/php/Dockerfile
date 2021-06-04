FROM php:8.0.6-fpm-alpine3.13
LABEL maintainer="bell.tanaka@karabiner.tech"

COPY ./docker/php/php.ini /usr/local/etc/php/
COPY ./docker/php/opcache.ini /usr/local/etc/php/conf.d/

RUN apk upgrade --update \
  && apk --no-cache add --virtual .build-dependencies \
  wget \
  unzip \
  git \
  tzdata \
  oniguruma-dev \
  mariadb-dev \
  && apk --no-cache add \
  libzip-dev \
  icu-dev \
  libpng-dev \
  libjpeg-turbo-dev \
  libwebp-dev \
  freetype-dev \
  exiftool \
  && docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
  && docker-php-ext-install -j$(nproc) \
  bcmath \
  gd \
  opcache \
  pdo_mysql \
  zip \
  intl \
  opcache \
  exif \
  && cp /usr/share/zoneinfo/Asia/Tokyo /etc/localtime \
  && apk del .build-dependencies \
  && rm -rf /usr/lib/mysqld* \
  && rm -rf /usr/bin/mysql* \
  && rm -rf /var/cache/apk/*

RUN curl -sS https://getcomposer.org/installer | php \
  && mv composer.phar /usr/local/bin/composer

ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_NO_INTERACTION 1
ENV COMPOSER_MEMORY_LIMIT -1
ENV COMPOSER_HOME /composer
ENV PATH $PATH:/composer/vendor/bin

WORKDIR /var/www