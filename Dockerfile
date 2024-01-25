FROM php:8.2-fpm-alpine
WORKDIR /var/www
RUN sed -i 's/dl-cdn.alpinelinux.org/mirrors.aliyun.com/g' /etc/apk/repositories \
  && apk update --no-cache \
  && docker-php-source extract \
  && docker-php-ext-install -j$(nproc) pcntl \
  && docker-php-ext-enable opcache pcntl\
  && docker-php-source delete \
  && mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini" \
  && rm -rf /var/cache/apk/*
