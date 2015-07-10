# Laravel Imageoptimizer

With this package you can get easy language date formated string.

## Demo
// TODO

## Installation

### Php extension

Install php international support:
```
sudo apt-get install php5-intl 
```
Check that this extension is included:
```
php -m | grep intl
```

### Languages
Install some languages:
```
sudo apt-get install language-pack-de language-pack-en language-pack-es language-pack-it
sudo locale-gen
```

Check your available languages:
```
locale -a
```
Make sure that you have languages in format like this: de_DE or en_IN

### Laravel

Laravel require this package with composer:
```
composer require approached/laravel-date-international
```

// TODO some points

## License
MIT
