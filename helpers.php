<?php

if (!function_exists('dateintl_date')) {

    /**
     * Generate a international date string
     *
     * @param $type
     * @param $dateObject
     * @return string
     */
    function dateintl_date($type, $dateObject)
    {
        return app('dateintl')->date($type, $dateObject);
    }

}

if (!function_exists('dateintl_time')) {

    /**
     * Generate a international date string
     *
     * @param $type
     * @param $dateObject
     * @return string
     */
    function dateintl_time($type, $dateObject)
    {
        return app('dateintl')->time($type, $dateObject);
    }
}

if (!function_exists('dateintl_full')) {

    /**
     * Generate a international date string
     *
     * @param $type
     * @param $dateObject
     * @return string
     */
    function dateintl_full($type, $dateObject)
    {
        return app('dateintl')->full($type, $dateObject);
    }
}

if (!function_exists('dateintl_fullmix')) {

    /**
     * Generate a international date string
     *
     * @param $type
     * @param $dateObject
     * @return string
     */
    function dateintl_fullmix($type, $dateObject)
    {
        return app('dateintl')->dateintl_fullmix($type, $dateObject);
    }
}