# Laravel Imageoptimizer

[![License](https://poser.pugx.org/approached/laravel-date-international/license)](https://packagist.org/packages/approached/laravel-date-international)
[![Latest Stable Version](https://poser.pugx.org/approached/laravel-date-international/v/stable)](https://packagist.org/packages/approached/laravel-date-international)
[![Total Downloads](https://poser.pugx.org/approached/laravel-date-international/downloads)](https://packagist.org/packages/approached/laravel-date-international)

With this package you can get easy language date formated string in your language.

## Demo

**German:**
```
Date:
10.07.15
10.07.2015
10. Juli 2015
Freitag, 10. Juli 2015
10. Juli 2015
Freitag, 10. Juli 2015

Time:
14:23
14:23:27
14:23:27 GMT
14:23:27 GMT
14:23:27 GMT
14:23:27 GMT

Full:
10.07.15 14:23
10.07.2015 14:23:27
10. Juli 2015 14:23:27 GMT
Freitag, 10. Juli 2015 14:23:27 GMT
10. Juli 2015 14:23:27 GMT
Freitag, 10. Juli 2015 14:23:27 GMT
```

**Spanish:**
```
Date:
10/7/15
10/7/2015
10 de julio de 2015
viernes, 10 de julio de 2015
10 de julio de 2015
viernes, 10 de julio de 2015

Time:
14:24
14:24:48
14:24:48 GMT
14:24:48 (GMT)
14:24:48 GMT
14:24:48 (GMT)

Full:
10/7/15 14:24
10/7/2015 14:24:48
10 de julio de 2015, 14:24:48 GMT
viernes, 10 de julio de 2015, 14:24:48 (GMT)
10 de julio de 2015, 14:24:48 GMT
viernes, 10 de julio de 2015, 14:24:48 (GMT)
```

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
Make sure that you have languages in format like this: de_DE

### Laravel

Laravel require this package with composer:
```
composer require approached/laravel-date-international
```

After updating composer, add the ServiceProvider to the providers array in config/app.php
```
'Approached\LaravelDateInternational\ServiceProvider',

and

'Dateintl'=> 'Approached\LaravelDateInternational\DateIntlFacade',
```

## Usage

**Blade:**
```
    Date:<br>
    {{ dateintl_date('short', $date) }}<br>
    {{ dateintl_date('medium', $date) }}<br>
    {{ dateintl_date('long', $date) }}<br>
    {{ dateintl_date('full', $date) }}<br>
    {{ dateintl_date('gregorian', $date) }}<br>
    {{ dateintl_date('traditional', $date) }}<br>

    <br><br>
    Time:<br>
    {{ dateintl_time('short', $date) }}<br>
    {{ dateintl_time('medium', $date) }}<br>
    {{ dateintl_time('long', $date) }}<br>
    {{ dateintl_time('full', $date) }}<br>
    {{ dateintl_time('gregorian', $date) }}<br>
    {{ dateintl_time('traditional', $date) }}<br>

    <br><br>
    Full:<br>
    {{ dateintl_full('short', $date) }}<br>
    {{ dateintl_full('medium', $date) }}<br>
    {{ dateintl_full('long', $date) }}<br>
    {{ dateintl_full('full', $date) }}<br>
    {{ dateintl_full('gregorian', $date) }}<br>
    {{ dateintl_full('traditional', $date) }}<br>
```

**PHP:**
```
$str = Dateintl::full('short', $date);
```

## License
MIT
