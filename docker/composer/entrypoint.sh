#!/bin/bash

test -f /var/project/tmp/docker-composer-ready && rm /var/project/tmp/docker-composer-ready

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php
php -r "unlink('composer-setup.php');"

mv composer.phar /usr/local/bin/composer

cd /app
composer install

echo `date +%Y-%m-%d` > /var/project/tmp/docker-composer-ready
