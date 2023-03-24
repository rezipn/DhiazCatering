<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.checkout');
    }

    public function index2(Request $request)
    {
        return view('pages.checkout2');
    }

    public function index3(Request $request)
    {
        return view('pages.checkout3');
    }

    public function index4(Request $request)
    {
        return view('pages.checkout4');
    }

    public function success(Request $request)
    {
        return view('pages.success');
    }
}
