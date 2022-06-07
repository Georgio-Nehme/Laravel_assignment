<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class secondsCounter extends Controller
{
    public function countSeconds(){
        $timeFirst  = strtotime('1732-04-14 18:20:20');
        $timeSecond = strtotime('2022-06-07 18:20:20');
        $differenceInSeconds = $timeSecond - $timeFirst;
        return $differenceInSeconds;
    }
}
