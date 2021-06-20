FROM php:7.2-apache

COPY --from=composer /usr/bin/composer /usr/bin/composer
RUN apt update -y && \
	 apt install -y vim \
	 git \
	 libcurl4-openssl-dev \
	 pkg-config \
	 libssl-dev && \
	 pecl install mongodb && \
	 echo "extension=mongodb.so" >> /usr/local/etc/php/conf.d/docker-php-ext-sodium.ini && \
	 composer require mongodb/mongodb 
