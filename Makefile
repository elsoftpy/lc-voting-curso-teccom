test:
	echo $(shell pwd)
composer-install:
	docker run --rm \
    -u "$(shell id -u):$(shell id -g)" \
    -v "$(shell pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php80-composer:latest \
    composer install --ignore-platform-reqs
sailify:
	docker run --rm \
    -u "$(shell id -u):$(shell id -g)" \
    -v "$(shell pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
	composer require laravel/sail --dev
sail-install:
	docker run --rm \
    -u "$(shell id -u):$(shell id -g)" \
    -v "$(shell pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
	php artisan sail:install --no-interaction
