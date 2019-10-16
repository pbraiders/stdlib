# Stdlib <small>for PBRaiders</small>

**PBRaiders\Stdlib** is a set of components that implements general purpose utility classes and functions for different scopes.

- String and Array usefull functions.
- Reflection trait to access protected/private methods/properties. Used in test classes.

## Requirements

The package requires PHP >=7.2

!!! note
    You may check if your PHP and extension versions match the platform requirements using

    ``` bash
    composer diagnose
    ```

    and

    ``` bash
    composer check-platform-reqs
    ```

    *This requires [Composer](https://getcomposer.org/) to be available as composer.*

!!! info
    For specifics, please examine the manifest [composer.json](https://github.com/pbraiders/stdlib/blob/master/composer.json) file.

## Installation

The package is installable and PSR-4 autoloadable via [Composer](https://getcomposer.org/) as pbraiders/stdlib.

- For no dev use:

    ``` bash
    composer install --no-dev
    ```

- For dev use:

    ``` bash
    composer install
    ```

Alternatively, [download a release](https://github.com/pbraiders/stdlib/releases), or clone this repository, then map the Pbraiders\Stdlib\ namespace to the package src/ directory.

## Test

To run the unit tests at the command line, issue at the package root:

    composer install

and then

    composer test

*This requires [Composer](https://getcomposer.org/) to be available as composer.*

## Contributing

Thanks you for taking the time to contribute. Please fork the repository and make changes as you'd like.

If you have any ideas, just open an [issue](https://github.com/pbraiders/stdlib/issues) and tell us what you think. Pull requests are also warmly welcome.

If you encounter any **bugs**, please open an [issue](https://github.com/pbraiders/stdlib/issues).

Be sure to include a title and clear description,as much relevant information as possible, and a code sample or an executable test case demonstrating the expected behavior that is not occurring.

## License

**PBRaiders\Stdlib** is open-source and is licensed under the [GNU General Public License v3.0 License](https://github.com/pbraiders/stdlib/blob/master/LICENSE).
