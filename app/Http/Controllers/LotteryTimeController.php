<?php

namespace App\Http\Controllers;

use App\Models\LotteryTime;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LotteryTimeController extends Controller
{
    public function index(){
        $user = User::with('media')->where('id', auth()->user()->id)->first();
        return view('admin.lottery.lottery_time',compact('user'));
    }

    public function lotteryTimeDataAjax()
    {
        $lottery = LotteryTime::latest()->get();
        return response()->json(['data' => $lottery]);
    }

    public function save(Request $request){
        
        try{
            $time=DB::transaction(function()use($request){
                $time=LotteryTime::create([
                    'lottery_time'=>$request->lottery_time,
                    
                ]);
                return $time;
                
            });
            if($time){
                return back()->with('success','You have created the time successfully');
            }
            
        }
        catch(\Exception $e){
            return back()->with('error',$e->getMessage());
            
        }
        
    }
}