Run 
````
composer update
````


Copy .env.example file to .env on the root folder - database password and username are the same as in the dist version of the env file

````
php artisan key:generate

php artisan migrate
````

Serve on a server of your preference or use the build in php server with the following command:

````
php -S localhost:8000 -t public/
