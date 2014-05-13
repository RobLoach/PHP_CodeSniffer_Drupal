# Drupal Code Sniffer [![Build Status](https://travis-ci.org/RobLoach/PHP_CodeSniffer_Drupal.svg?branch=master)](https://travis-ci.org/RobLoach/PHP_CodeSniffer_Drupal)

Drupal standards for [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer).
This is a copy from [Coder module](http://drupal.org/project/coder)'s
[Code Sniffer](https://drupal.org/node/1419980). It's a prototype of seeing if it
would be possible to abstract it away from Coder and
[Drush](https://github.com/drush-ops/drush) entirely. This allows the Drupal Code
Sniffer standard definition to be managed and run completely independently from
Coder or Drush.


## Why?

There are number of benefits from running the code independently from the Coder module and Drush:

* Steps towards [encapsulation](http://en.wikipedia.org/wiki/Encapsulation_(object-oriented_programming))
* [Travis tests](https://travis-ci.org/RobLoach/PHP_CodeSniffer_Drupal)
* Can be run without needing Coder or Drush installed
* Can have releases independent from Coder module


## Installation

### Drush

```
drush dl composer-8.x
drush composer require global robloach/php_codesniffer_drupal @dev
```


### Composer

```
composer require global robloach/php_codesniffer_drupal @dev
```


## Usage

### Shell

```
~/.composer/vendor/bin/drupalcs /path/to/module
```

### PHP_CodeSniffer

```
phpcs --standard ~/.composer/vendor/robloach/php_code_sniffer_drupal /path/to/module
```


## Test

```
phpunit
```
