FROM php:7.4-fpm

RUN apt-get update && apt-get install -y nginx && useradd -r nginx

COPY nginx.conf /etc/nginx/nginx.conf

COPY www.conf /usr/local/etc/php-fpm.d/www.conf

COPY index.php /var/www/html/index.php

EXPOSE 9000
EXPOSE 7000

CMD service nginx start && /usr/local/sbin/php-fpm -F
