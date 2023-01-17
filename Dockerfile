FROM php:8.0-apache  

# Creates a directory called "app"
RUN mkdir /app  

# Sets that directory as your working directory
WORKDIR /app  

# Changes uid and gid of apache to docker user uid/gid
RUN usermod -u 1000 www-data && groupmod -g 1000 www-data

# Sets Apache to run via the app directory
RUN sed -i -e "s/var\/www/app/g" /etc/apache2/apache2.conf && sed -i -e "s/html/public/g" /etc/apache2/apache2.conf

# Copies your code to the image
COPY . /app  

