Laravel Logger
==============

Laravel Logger was created by, and is maintained by [Graham Campbell](https://github.com/GrahamCampbell), and provides pretty error pages for both development and production for [Laravel 5](http://laravel.com). It utilises the [Whoops](https://github.com/filp/whoops) package for the development error pages. Feel free to check out the [change log](CHANGELOG.md), [releases](https://github.com/GrahamCampbell/Laravel-Logger/releases), [license](LICENSE), and [contribution guidelines](CONTRIBUTING.md).

![Laravel Logger](https://cloud.githubusercontent.com/assets/2829600/7817621/06c7365c-03ce-11e5-967e-106b82ba8207.PNG)

<p align="center">
<a href="https://travis-ci.org/GrahamCampbell/Laravel-Logger"><img src="https://img.shields.io/travis/GrahamCampbell/Laravel-Logger/master.svg?style=flat-square" alt="Build Status"></img></a>
<a href="https://scrutinizer-ci.com/g/GrahamCampbell/Laravel-Logger/code-structure"><img src="https://img.shields.io/scrutinizer/coverage/g/GrahamCampbell/Laravel-Logger.svg?style=flat-square" alt="Coverage Status"></img></a>
<a href="https://scrutinizer-ci.com/g/GrahamCampbell/Laravel-Logger"><img src="https://img.shields.io/scrutinizer/g/GrahamCampbell/Laravel-Logger.svg?style=flat-square" alt="Quality Score"></img></a>
<a href="LICENSE"><img src="https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square" alt="Software License"></img></a>
<a href="https://github.com/GrahamCampbell/Laravel-Logger/releases"><img src="https://img.shields.io/github/release/GrahamCampbell/Laravel-Logger.svg?style=flat-square" alt="Latest Version"></img></a>
</p>


## Installation

[PHP](https://php.net) 5.5+ or [HHVM](http://hhvm.com) 3.6+, and [Composer](https://getcomposer.org) are required.

To get the latest version of Laravel Logger, simply add the following line to the require block of your `composer.json` file:

```
"graham-campbell/logger": "~1.0"
```

You'll then need to run `composer install` or `composer update` to download it and have the autoloader updated.

Once Laravel Logger is installed, you need to register the service provider. Open up `config/app.php` and add the following to the `providers` key.

* `'GrahamCampbell\Logger\LoggerServiceProvider'`


## Configuration

Laravel Logger supports optional configuration.

To get started, you'll need to publish all vendor assets:

```bash
$ php artisan vendor:publish
```

This will create a `config/logger.php` file in your app that you can modify to set your configuration. Also, make sure you check for changes to the original config file in this package between releases.

There is one config option:

##### Loggers

This option (`'loggers'`) defines each of the loggers to call under the hood while logging.


## Usage

There is currently no usage documentation for Laravel Logger, but we are open to pull requests.


## License

Laravel Logger is licensed under [The MIT License (MIT)](LICENSE).
