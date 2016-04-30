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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('businesses.create');
    }

    /**
     * Show the form for storing a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(BusinessDetail $business, Request $request)
    {
        $business->user_id = rand(100, 120); //Replace it later
        $business->fill($request->all())->save();
        //$business->create($request->all());
        return redirect()->route('businesses_path');
    }

    /**
     *Show details of a selected Business
     * @param BusinessDetail $business
     * @return View
     */
    public function show(BusinessDetail $business)
    {
        return view('businesses.show', compact('business'));
    }

    /**
     * Edit details of a selected Business
     * @param BusinessDetail $business
     * @return View
     */
    public function edit(BusinessDetail $business)
    {
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
        $business->fill($request->input())->save();
        return redirect("businesses/{$business->reference}");

    }
}