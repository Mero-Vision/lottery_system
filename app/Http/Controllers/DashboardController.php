<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $user = User::with('media')->where('id', auth()->user()->id)->first();
        return view('admin.dashboard',compact('user'));
    }
}