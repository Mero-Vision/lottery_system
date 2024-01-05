<?php

namespace App\Http\Controllers;

use App\Models\Lottery;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class ResultController extends Controller
{
    public function todayResultIndex()
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




        return view('today_result', compact('onepmdata', 'sixpmdata', 'eightpmdata'));
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

    public function sixPmIndex()
    {

        $currentDate = Carbon::today()->format('Y-m-d');
        // dd($currentDate);

        $currentTime = Carbon::now()->format('h:i A');
        if (strtotime($currentTime) >= strtotime("6:00 PM")) {
            $sixpmdata = Lottery::with('media')
                ->where('time', '=', "6:00 PM")
                ->where('date', '=', $currentDate)
                ->get();
        } else {
            $sixpmdata = [];
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

    public function oldResult()
    {

        $oldResult = Lottery::latest()->where('date','<',Carbon::today())->get();

        // Group the results by date
        $organizedData = $oldResult->groupBy('date');

        $perPage = 20; // Adjust the number of items per page as needed
        $currentPage = request()->input('page', 1);
        $pagedData = array_slice($organizedData->toArray(), ($currentPage - 1) * $perPage, $perPage);

        $organizedDataPaginated = new LengthAwarePaginator($pagedData, count($organizedData), $perPage);
        $organizedDataPaginated->setPath(request()->url());

        // Pass the organized data to the view
        return view('old_results', compact('organizedDataPaginated', 'oldResult'));
    }

    public function oldResultImageView($slug){
        $lottery=Lottery::with('media')->where('slug',$slug)->first();

        return view('view_old_result_image',compact('lottery'));
        
    }
}