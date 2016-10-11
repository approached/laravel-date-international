<?php

namespace Approached\LaravelDateInternational;

use Carbon\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Traits\Macroable;
use IntlCalendar;
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
        $this->langCode = $lang.'_'.strtoupper($lang);
    }

    public function date($type, Carbon $carbon, $calendar = null)
    {
        $calendar = $this->getCalendar($carbon, $calendar);

        $fmt = new IntlDateFormatter($this->langCode, $this->getType($type), IntlDateFormatter::NONE, $carbon->tz, $calendar);

        return $fmt->format($carbon->getTimestamp());
    }

    private function getType($type)
    {
        $types = [
            'short'       => IntlDateFormatter::SHORT,
            'medium'      => IntlDateFormatter::MEDIUM,
            'long'        => IntlDateFormatter::LONG,
            'full'        => IntlDateFormatter::FULL,
            'gregorian'   => IntlDateFormatter::GREGORIAN,
            'traditional' => IntlDateFormatter::TRADITIONAL,
        ];

        if (isset($types[$type])) {
            return $types[$type];
        }

        throw new \Exception($type.' ... TYPE not found');
    }

    private function getCalendar(Carbon $carbon, $calendar)
    {
        if (is_null($calendar)) {
            return;
        }

        return IntlCalendar::createInstance(
            $carbon->tz,
            $this->langCode.'@calendar='.$calendar
        );
    }

    public function time(Carbon $carbon, $withSeconds = false, $calendar = null)
    {
        $calendar = $this->getCalendar($carbon, $calendar);

        $fmt = new IntlDateFormatter($this->langCode, IntlDateFormatter::NONE, $this->getTimeType($withSeconds), $carbon->tz, $calendar);

        return $fmt->format($carbon->getTimestamp());
    }

    private function getTimeType($withSeconds)
    {
        if ($withSeconds) {
            return IntlDateFormatter::MEDIUM;
        }

        return IntlDateFormatter::SHORT;
    }

    public function full($type, Carbon $carbon, $withSeconds = false, $calendar = null)
    {
        $type = $this->getType($type);

        $calendar = $this->getCalendar($carbon, $calendar);

        $fmt = new IntlDateFormatter($this->langCode, $type, $this->getTimeType($withSeconds), $carbon->tz, $calendar);

        return $fmt->format($carbon->getTimestamp());
    }

    public function fullmix($dateType, $timeType, Carbon $carbon, $calendar = null)
    {
        $calendar = $this->getCalendar($carbon, $calendar);

        $fmt = new IntlDateFormatter($this->langCode, $this->getType($dateType), $this->getType($timeType), $carbon->tz, $calendar);

        return $fmt->format($carbon->getTimestamp());
    }

    public function pattern($pattern, Carbon $carbon, $calendar = null)
    {
        $type = $this->getType('full');

        $calendar = $this->getCalendar($carbon, $calendar);

        $fmt = new IntlDateFormatter($this->langCode, $type, $this->getTimeType(false), $carbon->tz, $calendar);

        $fmt->setPattern($pattern);

        return $fmt->format($carbon->getTimestamp());
    }

    public function format($pattern, Carbon $carbon, $calendar = null)
    {
        return $this->pattern($pattern, $carbon, $calendar);
    }
}
