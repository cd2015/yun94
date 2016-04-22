<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\BusinessDetail;
use Illuminate\Http\Request;
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
     * @param BusinessDetail $business
     * @return View
     */
    public function show(BusinessDetail $business)
    {
        //$business = $this->business->W($reference)->first();
        return view('businesses.show', compact('business'));
    }

    /**
     * Edit details of a selected Business
     * @param BusinessDetail $business
     * @return View
     */
    public function edit(BusinessDetail $business)
    {
        //$business = $this->business->whereReference($reference)->first();
        return view('businesses.edit', compact('business'));

    }

    /**
     * Update details of a selected Business
     * @param BusinessDetail $business
     * @param Request $request
     * @return View
     */
    public function update(BusinessDetail $business, Request $request)
    {
        //$business = $this->business->whereReference($reference)->first();
        //dd($request->get('name'));
        //return view('businesses.update', compact('business'));
        //return "God is great";

        //$business->name = $request->get('name')->save;
       // $business->name = $request->get('name');
        /*
        $business->fill([
            "name" => $request->get('name'),
            "category" => $request->get('category'),
            "about" => $request->get('about'),
        ]);
        //dd($business);
        $business->save();;
        */
        $business->fill($request->input())->save();
        return redirect('businesses');

    }
}