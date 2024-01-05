<?php

namespace App\Http\Controllers;

use App\Models\Lottery;
use Carbon\Carbon;
use Illuminate\Http\Request;


class ResultController extends Controller
{
    public function todayResultIndex(){
       

        $currentDate = Carbon::today()->format('Y-m-d');

        $currentTime = Carbon::now()->format('h:i A');

        if (strtotime($currentTime) >= strtotime("1:00 PM")) {
        $onepmdata = Lottery::with('media')
        ->where('time', '=', "1:00 PM")
        ->where('date', '>=', $currentDate)
            ->get();
        } else {
            $onepmdata = [];
        }

       
        if (strtotime($currentTime) >= strtotime("6:00 PM")) {
            $sixpmdata = Lottery::with('media')
                ->where('time', '=', "6:00 PM")
                ->where('date', '=', $currentDate)
                ->get();
        } else {
            $sixpmdata = [];
        }

        if (strtotime($currentTime) >= strtotime("8:00 PM")) {
        $eightpmdata = Lottery::with('media')
        ->where('time', '=', "8:00 PM")
        ->where('date', '>=', $currentDate)
            ->get();

        } else {
            $eightpmdata = [];
        }

        

       
        return view('today_result',compact('onepmdata', 'sixpmdata', 'eightpmdata'));
    }


    public function onePmIndex()
    {

        $currentDate = Carbon::today()->format('Y-m-d');

        $currentTime = Carbon::now()->format('h:i A');

        if (strtotime($currentTime) >= strtotime("1:00 PM")) {
            $onepmdata = Lottery::with('media')
            ->where('time', '=', "1:00 PM")
            ->where('date', '>=', $currentDate)
                ->get();
        } else {
            $onepmdata = [];
        }

        return view('onepm_result', compact('onepmdata'));
    }

    public function sixPmIndex(){

        $currentDate = Carbon::today()->format('Y-m-d');
        // dd($currentDate);

        $currentTime = Carbon::now()->format('h:i A');
        if (strtotime($currentTime) >= strtotime("6:00 PM")) {
            $sixpmdata = Lottery::with('media')
                ->where('time', '=', "6:00 PM")
                ->where('date', '=', $currentDate)
                ->get();
        }
        else {
            $sixpmdata=[];
        }
       

            
        return view('sixpm_result', compact('sixpmdata'));
    }

    public function eightPmIndex()
    {
        $currentDate = Carbon::today()->format('Y-m-d');

        $currentTime = Carbon::now()->format('h:i A');
        if (strtotime($currentTime) >= strtotime("8:00 PM")) {
            $eightpmdata = Lottery::with('media')
            ->where('time', '=', "8:00 PM")
            ->where('date', '>=', $currentDate)
                ->get();
        } else {
            $eightpmdata = [];
        }


        return view('eightpm_result', compact('eightpmdata'));
    }
}