[![Build Status](https://travis-ci.org/shopsys/coding-standards.svg?branch=master)](https://travis-ci.org/shopsys/coding-standards)
[![Downloads](https://img.shields.io/packagist/dt/shopsys/coding-standards.svg)](https://packagist.org/packages/shopsys/coding-standards)

## About

This project provides [common coding standards](docs/description-of-used-coding-standards-rules.md) for new ShopSys projects.

Project includes following tools:
* [PHP-Parallel-Lint](https://github.com/JakubOnderka/PHP-Parallel-Lint)
* [PHP-CS-Fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer)
* [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer)
* [PHPMD](https://github.com/phpmd/phpmd)

## Usage examples

For further information see official documentation of particular project.

### PHP-Parallel-Lint

```
php vendor/bin/parallel-lint /path/to/project
```

### PHP-CS-Fixer

```
php vendor/bin/php-cs-fixer fix /path/to/project --config=vendor/shopsys/coding-standards/build/phpcs-fixer.php_cs
```

### PHP_CodeSniffer

```
php vendor/bin/phpcs /path/to/project --standard=vendor/shopsys/coding-standards/rulesetCS.xml
```

### PHPMD

```
php vendor/bin/phpmd /path/to/project text vendor/shopsys/coding-standards/rulesetMD.xml
```
