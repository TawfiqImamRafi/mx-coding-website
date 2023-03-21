<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Helpers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SiteSettings;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SiteSettingsController extends Controller
{
    public function index()
    {
        $settings = SiteSettings::first();
        if ($settings == false) {
            $settings = [
                'type' => 'about_us',
            ];
            SiteSettings::insert($settings);
            $settings = SiteSettings::first();
        }

        $data = [
            'page_title' => 'Site Settings',
            'data' => $settings
        ];

        return view('dashboard.settings.index')->with(array_merge($this->data, $data));
    }

    public function store(Request $request)
    {
        $about_us = Page::where(['type' => 'about_us'])->first();
        if ($request->has('image')) {
            if (isset($about_us) && $about_us->image) {
                unlink($about_us->image);
            }
            $path = Helpers::file_upload($request,'image','page');
        }

        DB::table('pages')->updateOrInsert(['type' => 'about_us'], [
            'title' => $request->get('title'),
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
