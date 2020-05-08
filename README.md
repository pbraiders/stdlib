# Stdlib for PBRaiders

[![Build Status](https://travis-ci.com/pbraiders/stdlib.svg?branch=master)](https://travis-ci.com/pbraiders/stdlib)
[![Coverage Status](https://coveralls.io/repos/github/pbraiders/stdlib/badge.svg?branch=master)](https://coveralls.io/github/pbraiders/stdlib?branch=master)

**PBRaiders\Stdlib** is a set of components that implements general purpose utility classes and functions for different scopes.

- String and Array usefull functions.
- Reflection trait to access protected/private methods/properties. Used in test classes.

## Table of Contents

- [Requirements](#requirements) | [Installation](#installation) | [Documentation](#documentation) | [Test](#test) | [Contributing](#contributing) | [License](#license)

## Requirements

The package requires PHP >=7.2. For specifics, please examine the manifest [composer.json](https://github.com/pbraiders/stdlib/blob/master/composer.json) file.

You may check if your PHP and extension versions match the platform requirements using

    composer diagnose

and

    composer check-platform-reqs

*This requires [Composer](https://getcomposer.org/) to be available as composer.*

## Installation

This package is installable and PSR-4 autoloadable via [Composer](https://getcomposer.org/) as pbraiders/stdlib.

For no dev use:

    composer install --no-dev

For dev use:

    composer install

Alternatively, [download a release](https://github.com/pbraiders/stdlib/releases), or clone this repository, then map the Pbraiders\Stdlib\ namespace to the package src/ directory.

## Documentation

Please, read the non exhaustive [documentation](https://pbraiders.github.io/stdlib/) we wrote. More details may be found in the code and the comments ;)

## Test

To run the unit tests at the command line, issue at the package root:

    composer install

and then

    composer test

*This requires [Composer](https://getcomposer.org/) to be available as composer.*

## Contributing

Thanks you for taking the time to contribute. Please fork the repository and make changes as you'd like.

If you have any ideas, just open an [issue](https://github.com/pbraiders/stdlib/issues) and tell me what you think. Pull requests are also warmly welcome.

If you encounter any **bugs**, please open an [issue](https://github.com/pbraiders/stdlib/issues).

Be sure to include a title and clear description,as much relevant information as possible, and a code sample or an executable test case demonstrating the expected behavior that is not occurring.

## License

**PBRaiders\Stdlib** is open-source and is licensed under the [MIT License](https://github.com/pbraiders/stdlib/blob/master/LICENSE).
