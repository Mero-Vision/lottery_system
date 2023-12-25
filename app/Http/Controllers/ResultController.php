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
       
        $onepmdata= Lottery::with('media')->where('time','>=', $formattedTime)->get();
       
        return view('today_result',compact('onepmdata'));
    }
}