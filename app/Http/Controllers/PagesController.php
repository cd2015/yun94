<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{

    function index()
    {
        return view('pages.home');
    }

    function about()
    {
        return view('pages.about');
    }
}
