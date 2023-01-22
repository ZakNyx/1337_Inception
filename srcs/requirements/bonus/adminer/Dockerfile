FROM debian:buster

RUN apt-get update -y && \
	apt-get install -y wget \
	php \
	php-mysql

# Download adminer and changes its name to adminer.php
# Changes the ownership of adminer.php to the www.data user and group
# Gives the owner (user) full permissions and the group and others read and execute permission.
RUN wget -O /var/www/html/index.php https://www.adminer.org/latest.php && \
	chown -R www-data:www-data /var/www/html/index.php && \
	chmod -755 /var/www/html/index.php

# set working directory
WORKDIR /var/www/html

# remove default index.html
RUN rm -rf index.html

# start built-in web server
CMD ["php", "-S", "0.0.0.0:8080"]