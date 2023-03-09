<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Helpers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AboutUsController extends Controller
{
    public function index()
    {
        $page = Page::where(['title' => 'about_us'])->first();
        if ($page == false) {
            $page = [
                'title' => 'about_us',
            ];
            Page::insert($page);
        }

        $data = [
            'page_title' => 'About Us',
            'data' => $page
        ];

        return view('dashboard.about-us.index')->with(array_merge($this->data, $data));
    }

    public function store(Request $request)
    {
        $rules = [
            'content' => 'required',
            'image' => 'required',
        ];
        //validation
        $this->validate($request, $rules);

        $about_us = Page::where(['title' => 'about_us'])->first();
        if ($request->has('image')) {
            if ($about_us->image) {
                unlink($about_us->image);
            }
            $path = Helpers::file_upload($request,'image','page');
        }

        DB::table('pages')->updateOrInsert(['title' => 'about_us'], [
            'content' => $request->get('content'),
            'image' => $path,
        ]);

        return response()->json([
            'type' => 'success',
            'title' => 'Success',
            'message' => 'About Us saved successfully',
            'redirect' => route('about-us.index')
        ]);
    }
}
