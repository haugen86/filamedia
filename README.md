# A media manager for Filament, built upon Spaties Media Library package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/haugen86/filamedia.svg?style=flat-square)](https://packagist.org/packages/haugen86/filamedia)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/haugen86/filamedia/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/haugen86/filamedia/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/haugen86/filamedia/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/haugen86/filamedia/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/haugen86/filamedia.svg?style=flat-square)](https://packagist.org/packages/haugen86/filamedia)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require haugen86/filamedia
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filamedia-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filamedia-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filamedia-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filamedia = new Haugen86\Filamedia();
echo $filamedia->echoPhrase('Hello, Haugen86!');
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

- [Marius Haugen](https://github.com/haugen86)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
