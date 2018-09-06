#!/bin/sh

# /usr/sbin/nginx -g daemon off;
# service nginx start;
service php7.2-fpm start;
ln -s /etc/nginx/sites-available/default /etc/nginx/sites-enabled/default;
cd /var/www/html/project-app-lumen && composer install;

exec "$@";
