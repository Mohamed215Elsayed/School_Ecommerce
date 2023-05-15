<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    //
    public function setLang($locale)
    {
        return back()->cookie('X-Language', $locale, 60 * 24 * 30 * 12);
    }

    public function welcome()
    {
        return view('welcome');
    }
}