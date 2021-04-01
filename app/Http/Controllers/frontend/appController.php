<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class appController extends Controller
{
    public function indexEn(Type $var = null)
    {
        return view('frontend.en.pages.index.index');
    }
    public function indexAr(Type $var = null)
    {
        return view('frontend.ar.pages.index.index');
    }
}
