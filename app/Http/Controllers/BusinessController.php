<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\BusinessDetail;

class BusinessController extends Controller
{
    public function index(BusinessDetail $business)
    {
        $businesses = $business->get();
        return view('business.index', compact('businesses'));
    }

    public function show(BusinessDetail $business)
    {
        //$business = BusinessDetail::whereBusinessReference($business_reference)->first();
        return view('business.show', compact('business'));
    }
}