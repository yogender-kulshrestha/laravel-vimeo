<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Vimeo;

class VimeoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Vimeo::request('/me/videos', ['per_page' => 10], 'GET');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->video) {
            return Vimeo::upload($request->video);
        }
        return 'video field is required.';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vimeo  $vimeo
     * @return \Illuminate\Http\Response
     */
    public function show(Vimeo $vimeo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vimeo  $vimeo
     * @return \Illuminate\Http\Response
     */
    public function edit(Vimeo $vimeo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vimeo  $vimeo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vimeo $vimeo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vimeo  $vimeo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vimeo $vimeo)
    {
        //
    }
}
