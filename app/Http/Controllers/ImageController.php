<?php

namespace App\Http\Controllers;

use Config;
use Illuminate\Http\Request;

use App\Http\Requests;
use Response;
use Symfony\Component\HttpFoundation\File\File;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Get the Image related to this Controller
     *
     * @param $filename
     * @return Response
     */
    public function getImage($filename)
    {
        // Append the filename to the path where our images are located
        $path = Config::get('assets.images') . $filename;
        dd(public_path());

        // Initialize an instance of Symfony's File class.
        $file = new File($path);
        dd($path);

        //Make a new response out of the contents of the file
        //Set the response status code to 200 OK
        $response = Response::make(File::get($path), 200);

        // Modify our output's header.
        // Set the content type to the mime of the file.
        // In the case of a .jpeg this would be image/jpeg
        $response->header('Content-type', $file->getMimeType());
        dd($response);
        return $response;
    }
}
