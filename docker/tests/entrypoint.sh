#!/bin/bash

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php
php -r "unlink('composer-setup.php');"

mv composer.phar /usr/local/bin/composer

# Wait until composer has installed all dependensies
until [ -f /var/project/tmp/docker-composer-ready ]
do
  sleep 5
done

cd /app

composer lint
composer test
composer stan
composer doc
