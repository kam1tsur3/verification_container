FROM php:7.2-apache

RUN apt update -y && \
	 apt install -y vim \
	 git \
	 libcurl4-openssl-dev \
	 pkg-config \
	 libssl-dev \
	 libldap2-dev && \
	 docker-php-ext-install ldap
