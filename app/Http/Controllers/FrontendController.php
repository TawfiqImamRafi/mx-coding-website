<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Page;
use App\Models\Service;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {

        $data = [
            'page_title' => 'Home',
            'services' => Service::all(),
            'courses' => Course::all(),
            'about' => Page::where(['type' => 'about_us'])->first(),
            'home' => Page::where(['type' => 'home'])->first(),

        ];

        return view('frontend.index')->with(array_merge($this->data, $data));
    }

    public function privacy()
    {
        $page = Page::where(['type' => 'privacy_policy'])->first();
        $data = [
            'page_title' => 'Privacy & Policy',
            'data' => $page
        ];

        return view('frontend.privacy')->with(array_merge($this->data, $data));
    }
    public function terms()
    {
        $page = Page::where(['type' => 'terms_condition'])->first();
        $data = [
            'page_title' => 'Terms & Condition',
            'data' => $page
        ];

        return view('frontend.terms')->with(array_merge($this->data, $data));
    }
    public function about()
    {
        $page = Page::where(['type' => 'about_us'])->first();
        $data = [
            'page_title' => 'About Us',
            'data' => $page
        ];

        return view('frontend.about')->with(array_merge($this->data, $data));
    }
    public function services()
    {
        $data = [
            'page_title' => 'Services',
            'services' => Service::all()
        ];

        return view('frontend.services')->with(array_merge($this->data, $data));
    }
    public function courses()
    {
        $data = [
            'page_title' => 'Courses',
            'courses' => Course::all()
        ];

        return view('frontend.courses')->with(array_merge($this->data, $data));
    }
    public function contact()
    {
        $data = [
            'page_title' => 'Contact Us',
        ];

        return view('frontend.contact')->with(array_merge($this->data, $data));
    }

    public function switch(Request $request, $locale)
    {
        session(['APP_LOCALE' => $locale]);
        return redirect()->back();
    }
}
