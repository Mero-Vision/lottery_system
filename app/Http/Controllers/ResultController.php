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
        ->where('time', '=', "1:00 PM")
        ->where('date', '>=', $currentDate)
            ->get();

        $sixpmdata = Lottery::with('media')
            ->where('time', '=', "6:00 PM")
            ->where('date', '>=', $currentDate)
            ->get();


        $eightpmdata = Lottery::with('media')
        ->where('time', '=', "8:00 PM")
        ->where('date', '>=', $currentDate)
            ->get();

        

       
        return view('today_result',compact('onepmdata', 'sixpmdata', 'eightpmdata'));
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

    public function sixPmIndex(){

        $currentDate = Carbon::today()->format('Y-m-d');

        $sixpmdata = Lottery::with('media')
            ->where('time', '=', "6:00 PM")
            ->where('date', '>=', $currentDate)
            ->get();

            
        return view('sixpm_result', compact('sixpmdata'));
    }

    public function eightPmIndex()
    {

        $currentDate = Carbon::today()->format('Y-m-d');

        $eightpmdata = Lottery::with('media')
        ->where('time', '=', "8:00 PM")
        ->where('date', '>=', $currentDate)
            ->get();


        return view('eightpm_result', compact('eightpmdata'));
    }
}