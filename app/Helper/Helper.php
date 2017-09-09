<?php

namespace App\Helper;

use Carbon\Carbon;

class Helper
{

    /**
     * Format date time
     *
     * @param $dateTimeString
     * @return string
     */
    public static function formatDateTime($dateTimeString)
    {
        return Carbon::parse($dateTimeString)->diffForHumans();
    }
}
