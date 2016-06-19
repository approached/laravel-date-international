# Laravel date international

[![License](https://poser.pugx.org/approached/laravel-date-international/license)](https://packagist.org/packages/approached/laravel-date-international)
[![Latest Stable Version](https://poser.pugx.org/approached/laravel-date-international/v/stable)](https://packagist.org/packages/approached/laravel-date-international)
[![Total Downloads](https://poser.pugx.org/approached/laravel-date-international/downloads)](https://packagist.org/packages/approached/laravel-date-international)

With this package you can get easy formated date sting in your language.

## Demo

**German:**
```
Date:
20.08.15
20.08.2015
20. August 2015
Donnerstag, 20. August 2015

Time:
13:21
13:21:54 (with seconds)

Full:
20.08.15 13:21
20.08.2015 13:21
20. August 2015 13:21
Donnerstag, 20. August 2015 13:21
```

**Italy:**
```
Date:
20/08/15
20/ago/2015
20 agosto 2015
giovedì 20 agosto 2015

Time:
13:26
13:26:36 (with seconds)

Full:
20/08/15 13:26
20/ago/2015 13:26
20 agosto 2015 13:26
giovedì 20 agosto 2015 13:26:36 (with seconds)
```

**English:**
```
Date:
8/20/15
Aug 20, 2015
August 20, 2015
Thursday, August 20, 2015

Time:
1:25 PM
1:25:28 PM (with seconds)

Full:
8/20/15, 1:25 PM
Aug 20, 2015, 1:25 PM
August 20, 2015 at 1:25 PM
Thursday, August 20, 2015 at 1:25:28 PM (with seconds)
```

**Spanish:**
```
Date:
20/8/15
20/8/2015
20 de agosto de 2015
jueves, 20 de agosto de 2015

Time:
13:27
13:27:42 (with seconds)

Full:
20/8/15 13:27
20/8/2015 13:27
20 de agosto de 2015, 13:27
jueves, 20 de agosto de 2015, 13:27:42 (with seconds)
```

And many more... 
You can look all available language packages with:
```bash
aptitude search language-pack-
```

## Installation

### Php extension

Install php international support:
```bash
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

After updating composer, add the ServiceProvider to the providers array in config/app.php:

Laravel 5.1:
```
Approached\LaravelDateInternational\ServiceProvider::class,

and

'Dateintl'=> Approached\LaravelDateInternational\DateIntlFacade::class,
```
Laravel 5.0:
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
    {{ dateintl_date('full', $date) }}<br><br>

    Time:<br>
    {{ dateintl_time($date) }}<br>
    {{ dateintl_time($date, true) }} (with seconds)<br><br>

    Full:<br>
    {{ dateintl_full('short', $date) }}<br>
    {{ dateintl_full('medium', $date) }}<br>
    {{ dateintl_full('long', $date) }}<br>
    {{ dateintl_full('full', $date, true) }}  (with seconds)<br>
```

**PHP:**
```
$str = Dateintl::full('short', $date);
```

## License
MIT
