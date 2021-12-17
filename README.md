# PHP Tutorials

Several classes demonstrating the PHP language.

## Installation

You'll need a working version of PHP and of `composer` in order for the scripts here to work.

Run `composer install` to install the project dependencies and vendor packages.

## Deployment

To run a PHP file and output the response to the console, use the following command:

```bash
$ php src/<FILENAME>.php

Output from the PHP file will go here.
```

You can serve PHP files with a PHP server:

```bash
$ php -S localhost:<PORT> -t src/

[Fri Jan 1 12:00:00 2021] PHP 8.0.13 Development Server (http://localhost:<PORT>) started
```