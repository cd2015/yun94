<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\BusinessDetail;

class BusinessController extends Controller
{
    public function index()
    {
        $businesses = BusinessDetail::get();
        return view('business.index', compact('businesses'));
    }

    public function show($business_reference)
    {
        $business = BusinessDetail::whereBusinessReference($business_reference)->first();
        return view('business.show', compact('business'));
    }
}