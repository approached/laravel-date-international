<?php namespace Approached\LaravelDateInternational;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Traits\Macroable;
use IntlDateFormatter;

class DateIntlBuilder
{

    use Macroable;
    protected $langCode;

    public function __construct($lang = null)
    {
        // set langcode
        if (is_null($lang)) {
            $lang = App::getLocale();
        }
        $this->langCode = $lang . '_' . strtoupper($lang);
    }

    public function date($type, \Carbon\Carbon $carbon)
    {
        $fmt = new IntlDateFormatter($this->langCode, $this->getType($type), IntlDateFormatter::NONE);

        return $fmt->format($carbon->getTimestamp());
    }

    public function time($type, \Carbon\Carbon $carbon)
    {
        $fmt = new IntlDateFormatter($this->langCode, IntlDateFormatter::NONE, $this->getType($type));

        return $fmt->format($carbon->getTimestamp());
    }

    public function full($type, \Carbon\Carbon $carbon)
    {
        $type = $this->getType($type);
        $fmt = new IntlDateFormatter($this->langCode, $type, $type);

        return $fmt->format($carbon->getTimestamp());
    }

    public function fullmix($dateType, $timeType, \Carbon\Carbon $carbon)
    {
        $fmt = new IntlDateFormatter($this->langCode, $this->getType($dateType), $this->getType($timeType));

        return $fmt->format($carbon->getTimestamp());
    }

    public function date_intl($type, \Carbon\Carbon $carbon)
    {
        var_dump(234);
    }

    private function getType($type)
    {
        $types = array(
            'short' => IntlDateFormatter::SHORT,
            'medium' => IntlDateFormatter::MEDIUM,
            'long' => IntlDateFormatter::LONG,
            'full' => IntlDateFormatter::FULL,
            'gregorian' => IntlDateFormatter::GREGORIAN,
            'traditional' => IntlDateFormatter::TRADITIONAL
        );

        if (isset($types[$type])) {
            return $types[$type];
        }

        throw new \Exception($type . ' ... TYPE not found');
    }

}
