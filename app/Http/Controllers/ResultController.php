<?php

namespace App\Http\Controllers;

use App\Models\Lottery;
use Carbon\Carbon;
use Illuminate\Http\Request;


class ResultController extends Controller
{
    public function todayResultIndex(){
        $currentTime = Carbon::now();
        $formattedTime = $currentTime->format('g:i A');

        $currentDate = Carbon::today()->format('Y-m-d');

        $onepmdata = Lottery::with('media')
        ->where('time', '>=', $formattedTime)
        ->where('date', '>=', $currentDate)
        ->get();

        

       
        return view('today_result',compact('onepmdata'));
    }


    public function onePmIndex()
    {
       

        $currentDate = Carbon::today()->format('Y-m-d');

        $onepmdata = Lottery::with('media')
        ->where('time', '=', "1:00 PM")
            ->where('date', '>=', $currentDate)
            ->get();




        return view('onepm_result', compact('onepmdata'));
    }
}