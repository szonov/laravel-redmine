# Laravel Redmine

Laravel wrapper for the Redmine API. https://github.com/kbsali/php-redmine-api

## Installation

1. install package

`composer require szonov/laravel-redmine`

2. publish config file

`php artisan vendor:publish --provider "SZonov\Redmine\RedmineServiceProvider"`

3. update config stored in `config/redmine.php`.

## Usage

1. using facades

```php
use SZonov\Redmine\Facades\Redmine;

dump(Redmine::user()->all());
dump(Redmine::host('other')->user()->all());
```

2. using app helper

```php
dump(app('redmine')->user()->all());
dump(app('redmine')->host('other')->user()->all());
```
