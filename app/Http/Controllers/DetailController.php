<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.detail');
    }

    public function index2(Request $request)
    {
        return view('pages.detail2');
    }

    public function index3(Request $request)
    {
        return view('pages.detail3');
    }

    public function index4(Request $request)
    {
        return view('pages.detail4');
    }
}

