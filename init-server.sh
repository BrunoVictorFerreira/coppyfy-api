#! /bin/bash

TZ=America/Sao_Paulo
echo "#Etc/UTC" > /etc/timezone
echo $TZ >> /etc/timezone
ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone
cat /etc/timezone
date

chmod --recursive u+rw,g+rw,o+rw vendor/ storage/

service cron start

chmod 777 -R app/
chmod 777 -R config/
chmod 777 -R database/
chmod 777 -R resources/
chmod 777 -R storage/
chmod 777 -R routes/
chmod 777 -R vendor/

php artisan cache:clear
php artisan route:clear
php artisan config:clear
composer dumpautoload -
php artisan clear-compiled
composer dumpautoload


php artisan vendor:publish --provider="Laravel\Scout\ScoutServiceProvider"

php artisan migrate --force

php-fpm -F -R

php artisan queue:work

