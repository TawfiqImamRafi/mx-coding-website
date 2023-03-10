<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Helpers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PrivacyPolicyController extends Controller
{
    public function index()
    {
        $page = Page::where(['title' => 'privacy_policy'])->first();
        if ($page == false) {
            $page = [
                'title' => 'privacy_policy',
            ];
            Page::insert($page);
            $page = Page::where(['title' => 'privacy_policy'])->first();
        }

        $data = [
            'page_title' => 'Privacy & Policy',
            'data' => $page
        ];

        return view('dashboard.privacy-policy.index')->with(array_merge($this->data, $data));
    }

    public function store(Request $request)
    {
        $rules = [
            'content' => 'required',
            'image' => 'required',
        ];
        //validation
        $this->validate($request, $rules);

        $privacy_policy = Page::where(['title' => 'privacy_policy'])->first();
        if ($request->has('image')) {
            if (isset($privacy_policy) && $privacy_policy->image) {
                unlink($privacy_policy->image);
            }
            $path = Helpers::file_upload($request,'image','page');
        }

        DB::table('pages')->updateOrInsert(['title' => 'privacy_policy'], [
            'content' => $request->get('content'),
            'image' => $path,
        ]);

        return response()->json([
            'type' => 'success',
            'title' => 'Success',
            'message' => 'Privacy & Policy saved successfully',
            'redirect' => route('privacy-policy.index')
        ]);
    }
}
