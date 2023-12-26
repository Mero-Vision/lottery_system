<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class QRController extends Controller
{
    public function index(){
        $user = User::with('media')->where('id', auth()->user()->id)->first();
        return view('admin.view_qr',COMPACT('user'));
    }
}