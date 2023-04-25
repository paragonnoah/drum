<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    //
    public function index(Request $request)
    {

        if (!\Session::has('lang')) {
            \Session::put('lang', $request->input('locale'));
        } else {
            \Session::put('lang', $request->input('locale'));
        }
        return redirect()->back();

    }

    public function change($lang)
    {
        \Session::put('lang', $lang);
        return redirect()->route("Home");

    }
}
