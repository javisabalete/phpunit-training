FROM php:7.1-apache
MAINTAINER Marçal Berga <hola@marcalberga.cat>
RUN apt-get update && apt-get -y install ssh
COPY . /var/www/html
WORKDIR /var/www/html
EXPOSE 80
RUN pecl install xdebug \
    && echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_enable=on" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_autostart=off" >> /usr/local/etc/php/conf.d/xdebug.ini

