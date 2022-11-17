build:
	composer install
	composer dumpautoload
	php artisan migrate --seed
	php artisan route:cache
	php artisan config:cache
	php artisan config:clear
	php artisan view:clear
	php artisan route:clear
	php artisan l5-swagger:generate
	# php artisan debugbar:clear
start:
	docker-compose up --build