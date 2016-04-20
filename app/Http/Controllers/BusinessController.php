<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\BusinessDetail;
use Illuminate\View;

/**
 * Controller method the manages Businesses
 * Class BusinessController
 * @package App\Http\Controllers
 */
class BusinessController extends Controller
{

    /**
     * @var BusinessDetail
     */
    private $business;

    public function __construct(BusinessDetail $selectedBusiness)
    {
        $this->business = $selectedBusiness;
    }

    /**
     *Show a list of all Businesses
     * @return View
     */
    public function index()
    {
        $businesses = $this->business->get();
        return view('businesses.index', compact('businesses'));
    }

    /**
     *Show details of a selected Business
     * @param $business_reference
     * @return View
     */
    public function show(BusinessDetail $business)
    {
        //$business = $this->business->whereBusinessReference($business_reference)->first();
        return view('businesses.show', compact('business'));
    }

    /**
     * Edit details of a selected Business
     * @param $business_reference
     * @return View
     */
    public function edit(BusinessDetail $business)
    {
        //$business = $this->business->whereBusinessReference($business_reference)->first();
        return view('businesses.edit', compact('business'));

    }

    /**
     * Update details of a selected Business
     * @param $business_reference
     * @return View
     */
    public function update(BusinessDetail $business)
    {
        //$business = $this->business->whereBusinessReference($business_reference)->first();
        dd(\Request::get('title'));
        //return view('businesses.update', compact('business'));
        return "God is great";

    }
}