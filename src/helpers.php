<?php

if (! function_exists('dateintl_date')) {

    /**
     * Generate a international date string.
     *
     * @param $type
     * @param $dateObject
     *
     * @return string
     */
    function dateintl_date($type, $dateObject, $calendar = null)
    {
        return app('dateintl')->date($type, $dateObject, $calendar);
    }
}

if (! function_exists('dateintl_time')) {

    /**
     * Generate a international date string.
     *
     * @param $type
     * @param $dateObject
     *
     * @return string
     */
    function dateintl_time($dateObject, $withSeconds = false, $calendar = null)
    {
        return app('dateintl')->time($dateObject, $withSeconds, $calendar);
    }
}

if (! function_exists('dateintl_full')) {

    /**
     * Generate a international date string.
     *
     * @param $type
     * @param $dateObject
     *
     * @return string
     */
    function dateintl_full($type, $dateObject, $withSeconds = false, $calendar = null)
    {
        return app('dateintl')->full($type, $dateObject, $withSeconds, $calendar);
    }
}

if (! function_exists('dateintl_fullmix')) {

    /**
     * Generate a international date string.
     *
     * @param $type
     * @param $dateObject
     *
     * @return string
     */
    function dateintl_fullmix($type, $dateObject, $calendar = null)
    {
        return app('dateintl')->fullmix($type, $dateObject, $calendar = null);
    }
}

if (! function_exists('dateintl_format')) {

    /**
     * Generate a international date string.
     *
     * @param $format
     * @param $dateObject
     *
     * @return string
     */
    function dateintl_format($format, $dateObject, $calendar = null)
    {
        return app('dateintl')->format($format, $dateObject, $calendar = null);
    }
}

