<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.index');
    }
    public function privacy(){
        return view('frontend.privacy');
    }
    public function terms(){
        return view('frontend.terms');
    }
    public function about(){
        return view('frontend.about');
    }
    public function services(){
        return view('frontend.services');
    }
    public function courses(){
        return view('frontend.courses');
    }
    public function contact(){
        return view('frontend.contact');
    }

    public function switch(Request $request, $locale){
        session(['APP_LOCALE'=>$locale]);
        return redirect()->back();
    }

}
