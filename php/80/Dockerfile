FROM php:8.0.11-fpm-bullseye

WORKDIR /var/www

# development / production
ARG PHP_ENV=development

# development / production
RUN apt-get update \
    && apt-get install -y vim \
    && apt-get install -y git \
    && apt-get install -y zsh \
    && git clone https://github.com/robbyrussell/oh-my-zsh.git ~/.oh-my-zsh \
    && cp ~/.oh-my-zsh/templates/zshrc.zsh-template ~/.zshrc \
    && chsh -s /bin/zsh \
    && git clone https://github.com/zsh-users/zsh-autosuggestions ${ZSH_CUSTOM:-~/.oh-my-zsh/custom}/plugins/zsh-autosuggestions \
    && apt-get install -y npm \
    && npm install --save-dev chokidar \
    && curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer \
    && composer config -g repo.packagist composer https://mirrors.aliyun.com/composer/ \
    && apt-get install -y libwebp-dev libjpeg-dev libpng-dev libfreetype6-dev libzip-dev\
    && cp /usr/local/etc/php/php.ini-$PHP_ENV /usr/local/etc/php/php.ini \
    && docker-php-ext-install bcmath pdo_mysql gd pcntl zip\
    && pecl install redis \
    && pecl install swoole \
    && pecl install xdebug \
    && docker-php-ext-enable redis swoole xdebug