<?php

namespace App\Helper;
use Carbon\Carbon;

class Helper
{
    public static function rupee_format($amount)
    {
        return "₹".number_format($amount);
    }

    public static function human_date($date)
    {
        return Carbon::parse($date)->format('d F, Y');
    }

    public static function human_date_time($date)
    {
        return Carbon::parse($date)->format('jS \o\f F, Y g:i:s A');
    }

    public static function vn($number)
    {
        $state      = substr($number, 0, 2);
        $district   = $number[2].$number[3];
        $last_4     = substr($number, -4);
        $middle     = str_replace($last_4, '', $number);
        $middle     = str_replace($state, '', $middle);
        $middle     = str_replace($district, '', $middle);
        $arr = array($state.$district.$middle, $last_4);
        return join("-",$arr);
    }
}