#!/usr/bin/env bash

echo "waiting for other services..."
sleep 5

cd /var/www && /usr/local/bin/composer install -n -o
/usr/bin/php /var/www/bin/console cache:clear -e prod
/usr/bin/php /var/www/bin/console doctrine:schema:update --force -e prod
/usr/bin/php /var/www/bin/console assets:install --symlink -e prod

/usr/sbin/php-fpm7.0 -F --allow-to-run-as-root
