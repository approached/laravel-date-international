<?php

if (!function_exists('date_intl')) {

    /**
     * Generate a international date string
     *
     * @param $type
     * @param $dateObject
     * @return string
     */
    function date_intl($type, $dateObject)
    {
        return app('dateintl')->date_intl($type, $dateObject);
    }

}
