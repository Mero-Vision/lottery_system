<?php

namespace App\Http\Controllers;

use App\Models\Lottery;
use App\Models\User;
use Illuminate\Http\Request;

class LotteryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::with('media')->where('id', auth()->user()->id)->first();
        return view('admin.lottery.lottery',compact('user'));
    }

    public function createLotteryIndex(){
        $user = User::with('media')->where('id', auth()->user()->id)->first();
        
        return view('admin.lottery.create_lottery',compact('user'));
    }

    public function lotteryDataAjax()
    {
        $lottery = Lottery::latest()->get();
        return response()->json(['data' => $lottery]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}