#!/bin/bash

# create directory to use in nginx container later and also to setup the wordpress conf
mkdir /var/www/
mkdir /var/www/html

cd /var/www/html


rm -rf *

curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar 

chmod +x wp-cli.phar 

mv wp-cli.phar /usr/local/bin/wp


wp core download --allow-root

mv /var/www/html/wp-config-sample.php /var/www/html/wp-config.php


mv /wp-config.php /var/www/html/wp-config.php


sed -i -r "s/db1/$db_name/1"   wp-config.php
sed -i -r "s/user/$db_user/1"  wp-config.php
sed -i -r "s/pwd/$db_pwd/1"    wp-config.php

wp core install --url=$WP_DOMAINE --title=$WP_TITLE --admin_user=$WP_ADMINUSER --admin_password=$WP_ADMINPASSWORD --admin_email=$WP_ADMINEMAIL --skip-email --allow-root


wp user create $WP_USR $WP_USREMAIL --role=author --user_pass=$WP_USRPASS --allow-root

wp plugin install redis-cache --activate --allow-root

wp plugin update --all --allow-root

wp theme install twentytwentytwo --activate --allow-root

sed -i 's/listen = \/run\/php\/php7.3-fpm.sock/listen = 9000/g' /etc/php/7.3/fpm/pool.d/www.conf

mkdir /run/php

wp redis enable --allow-root


/usr/sbin/php-fpm7.3 -F