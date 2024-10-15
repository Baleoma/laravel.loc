## Установка из репозитория

1. Склонируйте репозиторий.
```sh
git clone https://github.com/Alomon/laravel.loc.git
```
2. Перейдите в папку с проектом и установите composer-зависимости
```sh
cd laravel.loc
composer install
```
3. Скопируйте файл .env.example в .env
```sh
cp .env.example .env
```
4. Сгенерируйте ключ шифрования
```sh
php artisan key:generate
```
5. Измените файл конфигурации .env (если используете БД MySQL)
```php
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=Имя_БД
DB_USERNAME=Ваш_логин_от_БД
DB_PASSWORD=Ваш_пароль_от_БД

SESSION_DRIVER=file
```

## Пустой проект создан командами
```sh
composer create-project laravel/laravel .
php artisan install:api
php artisan config:publish cors
php artisan storage:link
```
В корне проекта создан файл .htaccess
```php
RewriteEngine on
RewriteRule ^(.*)$ public/$1 [L]
```
Please add the [Laravel\Sanctum\HasApiTokens] trait to your User model.
