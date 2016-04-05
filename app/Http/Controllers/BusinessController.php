<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class BusinessController extends Controller
{
    public function index()
    {
        //$businesses = $this->getBusinesses();

        $businesses = DB::table('business_details')->get();

        //dd($businesses);
        return view('business.index', compact('businesses'));
    }

    public function show($id)
    {
        //$business = $this->getBusinesses()[$id];
        $business = DB::table('business_details')->find($id);
        return view('business.show', compact('business'));
    }

    /**
     * @return array
     */
    /*public function getBusinesses()
    {
        return [
            'Advertisement & Branding',
            'Beauty Saloons & Spas',
            'Boutiques & Tailoring',
            'Bridal Services & Cars',
            'Courier',
            'Furniture & Interior Designs',
            'Gardens & Recreational Centers',
            'ICT, Software & Computing',
            'Phones & Accessories',
            'Photography & Video',
            'Restaurants and Hotels',
            'Tours and Travels'
        ];
    }
    */
}