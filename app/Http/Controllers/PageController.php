<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{
    public function registracija()
    {
        return view('pages.naloga7.registracija');
    }

    public function prijava()
    {
        return view('pages.naloga7.prijava');
    }

    public function deleteSession()
    {
        Session::flush();
    }
}
