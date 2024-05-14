#FROM nginx:latest

FROM php:7.0-fpm
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN docker-php-ext-enable mysqli

#COPY nginx-selfsigned.crt /etc/nginx/ssl/nginx-selfsigned.crt
#COPY nginx-selfsigned.key /etc/nginx/ssl/nginx-selfsigned.key
#
#COPY nginx.conf /etc/nginx/nginx.conf


