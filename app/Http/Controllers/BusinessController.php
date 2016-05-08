<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\BusinessRequest;
use App\BusinessDetail;
use Illuminate\Http\Request;
use Illuminate\View\View;

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
        $businesses = $this->business->latest()->get();
        return view('businesses.index', compact('businesses'));
    }

    /**
     * Show the form for creating a new Business.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('businesses.create');
    }

    /**
     * Store a newly created Business in the database.
     *
     * @param BusinessRequest $request
     * @param BusinessDetail $business
     * @return \Illuminate\Http\Response
     */
    public function store(BusinessRequest $request, BusinessDetail $business)
    {
        $input = $request->all();
        $input['user_id'] = rand(100, 120); //Replace it later
        $input['reference'] = slugify($input['name']);
        $business->create($input);
        return redirect()->route('businesses_path');
    }

    /**
     *Show details of a selected Business
     *
     * @param BusinessDetail $business
     * @return View
     */
    public function show(BusinessDetail $business)
    {
        return view('businesses.show', compact('business'));
    }

    /**
     * Edit details of a selected Business
     *
     * @param BusinessDetail $business
     * @return View
     */
    public function edit(BusinessDetail $business)
    {
        return view('businesses.edit', compact('business'));

    }

    /**
     * Update details of a selected Business
     *
     * @param BusinessRequest $request
     * @param BusinessDetail $business
     * @return View
     */
    public function update(BusinessRequest $request, BusinessDetail $business)
    {
        //$business->fill($request->input())->save();
        $business->update($request->input());
        //return redirect("businesses/{$business->reference}");
        return redirect()->route('business_path', $business->reference);

    }

    /**
     * Delete a selected Business
     *
     * @param BusinessDetail $business
     * @return View
     */
    public function destroy(BusinessDetail $business)
    {
        $business->delete();
        return redirect('businesses');

    }
}