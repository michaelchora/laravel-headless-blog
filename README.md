# laravel-headless-blog

[![Latest Version on Packagist](https://img.shields.io/packagist/v/michaelchora/laravel-headless-blog.svg?style=flat-square)](https://packagist.org/packages/michaelchora/laravel-headless-blog)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/michaelchora/laravel-headless-blog/run-tests?label=tests)](https://github.com/michaelchora/laravel-headless-blog/actions?query=workflow%3ATests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/michaelchora/laravel-headless-blog/Check%20&%20fix%20styling?label=code%20style)](https://github.com/michaelchora/laravel-headless-blog/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/michaelchora/laravel-headless-blog.svg?style=flat-square)](https://packagist.org/packages/michaelchora/laravel-headless-blog)


This package is to run a headless blog from your laravel app. It uses Nova as it's publishing UI.

## Installation

You can install the package via composer:

```bash
composer require michaelchora/laravel-headless-blog
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Michaelchora\LaravelHeadlessBlog\LaravelHeadlessBlogServiceProvider" --tag="headless-blog-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Michaelchora\LaravelHeadlessBlog\LaravelHeadlessBlogServiceProvider" --tag="headless-blog-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$laravel-headless-blog = new Michaelchora\LaravelHeadlessBlog();
echo $laravel-headless-blog->echoPhrase('Hello, Michaelchora!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Michael Chora](https://github.com/MichaelChora)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
