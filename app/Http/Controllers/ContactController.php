<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use App\Models\User;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('contact_us');
    }

    public function adminIndex(){
        $user = User::with('media')->where('id', auth()->user()->id)->first();
        $contacts=ContactUs::latest()->get();
        return view('admin.view-contact-us',compact('user','contacts'));
    }

    public function destroy($id){
        $contact=ContactUs::find($id);
        if(!$contact){
            return back()->with('error','Contact ID Not Found!');
        }
        $contact->delete();
        return back()->with('success','Contact Message Deleted Successfully!');
        
    }
}