# A package to log data to server

[![Latest Version on Packagist](https://img.shields.io/packagist/v/deniscosmin/logservice.svg?style=flat-square)](https://packagist.org/packages/deniscosmin/logservice)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/deniscosmin/logservice/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/deniscosmin/logservice/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/deniscosmin/logservice/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/deniscosmin/logservice/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/deniscosmin/logservice.svg?style=flat-square)](https://packagist.org/packages/deniscosmin/logservice)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/LogService.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/LogService)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require deniscosmin/logservice
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="logservice-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="logservice-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="logservice-views"
```

## Usage
First option : 
```php
use Deniscosmin21\LogService\LogService;

$el = new LogService();
```
Second option : 
```php
use LogData;

LogData::set_source($request)->set_data('my log', 'info')->email(['test@gmail.com', 'test2@gmail.com'])->phone('07....')->send();
```
The methods available :
```php
set_source(Request | string);
```
(sets the source of the log for example logs.mezoni.ro)

```php
set_data(string $details, string $type = 'info')
```
(sets the details of the log, and maybe the type if you want. Else the type will be info.)

```php
email(array $email_list)
```
(contains an array of emails to which the log will be sent by email. example ['test1@test.com', 'test2@test.com'])

```php
sms($phone_number)
```
(sends the log to the phone number by sms)

```php
type($type = 'info')
```
(sets the type of the log)

```php
send()
```
(sends the data to the api and returns the response from the api)

It can use any order but the last method used should be the send() method.
## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Draghici Denis Cosmin](https://github.com/DenisCosmin)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
