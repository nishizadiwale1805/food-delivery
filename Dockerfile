FROM php:7.4-apache 
COPY new/000-default.conf /etc/apache2/sites-available/000-default.conf

COPY new/start-apache /usr/local/bin

RUN a2enmod rewrite

RUN docker-php-ext-install mysqli

COPY . /var/www/html/

#COPY . /home/ubuntu/food-order/config/constants.php

RUN chown -R www-data:www-data /var/www/

RUN chmod 777 /usr/local/bin/start-apache

CMD ["start-apache"]
