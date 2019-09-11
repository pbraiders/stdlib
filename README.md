# Pbraiders-stdlib

Pbraiders\Stdlib is a set of components that implements general purpose utility class and functions for different scopes.

*Note: We use this package for our own projects, it contains only the features we need.*

## 1. Installation and Autoloading

This package requires PHP 7.3. For specifics, please examine the package [composer.json](https://github.com/pbraiders/stdlib/blob/master/composer.json) file.

You may check if your PHP and extension versions match the platform requirements using `composer diagnose` and `composer check-platform-reqs`. (This requires [Composer](https://getcomposer.org/) to be available as composer.)

This package is installable and PSR-4 autoloadable via [Composer](https://getcomposer.org/) as pbraiders/stdlib. For no dev, use `composer install --no-dev` and for dev, use `composer install`.

Alternatively, [download a release](https://github.com/pbraiders/stdlib/releases), or clone this repository, then map the Pbraiders\Stdlib\ namespace to the package src/ directory.
