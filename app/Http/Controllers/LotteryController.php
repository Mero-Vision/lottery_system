<?php

namespace App\Http\Controllers;

use App\Http\Requests\Lottery\LotteryCreateRequest;
use App\Models\Lottery;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function store(LotteryCreateRequest $request)
    {
        try{
            $lottery=DB::transaction(function()use($request){
                $lottery=Lottery::create([
                    'user_id'=>auth()->user()->id,
                    'lottery_name'=>$request->lottery_name,
                    'date'=>$request->date,
                    'time'=>$request->time,
                    'description'=>$request->description,
                    
                ]);
                if($request->lottery_image){
                    $lottery->addMedia($request->lottery_image)->toMediaCollection('lottery_image');
                }
                return $lottery;
                
            });
            if($lottery){
                return back()->with('success','Lottery created successfully!');
            }
            
        }
        catch(\Exception $e){
            return back()->with('error',$e->getMessage());
            
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::with('media')->where('id', auth()->user()->id)->first();
        $lottery=Lottery::find($id);
        if(!$lottery){
            return back()->with('error','Lottery data not found!');
        }
        return view('admin.lottery.view_lottery',compact('lottery','user'));
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
        $lottery = Lottery::find($id);

        if ($lottery) {
            $lottery->delete();
            $lottery->clearMediaCollection('lottery_image');
            return response()->json(['status' => 'success', 'message' => 'Lottery deleted successfully.']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Lottery Not Found!']);
        }
    }

   
    
       
    
}