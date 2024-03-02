## run
docker-compose build
docker-compose up

## storage folder error
sudo chmod -R a+rw storage
php artisan route:clear
php artisan config:clear
php artisan cache:clear
