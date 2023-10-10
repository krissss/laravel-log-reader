# Log Reader For laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/kriss/laravel-log-reader.svg?style=flat-square)](https://packagist.org/packages/kriss/laravel-log-reader)
[![Tests](https://github.com/krissss/laravel-log-reader/actions/workflows/run-tests.yml/badge.svg?branch=main)](https://github.com/krissss/laravel-log-reader/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/kriss/laravel-log-reader.svg?style=flat-square)](https://packagist.org/packages/kriss/laravel-log-reader)

Wrap [php-log-reader](https://github.com/krissss/php-log-reader) for laravel use~

## Installation

You can install the package via composer:

```bash
composer require kriss/laravel-log-reader
```

## Publish config

```php
php artisan vendor:publish --provider=Kriss\LaravelLogReader\LogReaderServiceProvider
```

## See Route

visit `{YourDomain}/log-reader`

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
