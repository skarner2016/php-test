# 使用指定基础镜像
FROM php:8.2-fpm-bullseye

# 设置环境变量 DEBIAN_FRONTEND
ENV DEBIAN_FRONTEND noninteractive

# 安装必要的软件包和依赖项
RUN apt-get update

# 安装 composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# 安装 PHP 扩展
#RUN docker-php-ext-install xml \
#    && docker-php-ext-enable xml

# 修改php-fpm配置文件 www.conf
#RUN sed -i 's|listen = /run/php/php8.2-fpm.sock|listen = 0.0.0.0:9000|' /etc/php/8.2/fpm/pool.d/www.conf

# 安装composer
#RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
#    && php composer-setup.php --install-dir=/usr/local/bin --filename=composer

# 暴露 PHP-FPM 默认监听端口
#EXPOSE 9000

# 启动 PHP-FPM 服务
#CMD ["php-fpm8.2", "--nodaemonize"]