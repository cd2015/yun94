<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{

    function index()
    {
        $onlineUsers = ['Sowed', 'Dero', 'Jonel'];
        //$onlineUsers = [];
        $name = 'Sowed';
        //return view('pages.home', ['name' => $name, 'onlineUsers' => $onlineUsers]);
        return view('pages.home')->with('name', $name)->with('onlineUsers', $onlineUsers);
    }

    function about()
    {
        $onlineUsers = ['Castor', 'DarthVader', 'Luke'];
        return view('pages.about', compact('onlineUsers'));
    }
}
