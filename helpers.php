<?php

if (!function_exists('dateintl')) {

    /**
     * Generate a international date string
     *
     * @param $type
     * @param $dateObject
     * @return string
     */
    function dateintl($type, $dateObject)
    {
        return app('dateintl')->date_intl($type, $dateObject);
    }

}
