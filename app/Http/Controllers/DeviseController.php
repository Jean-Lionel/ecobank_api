<?php

namespace App\Http\Controllers;

use App\Models\Devise;
use App\Http\Requests\StoreDeviseRequest;
use App\Http\Requests\UpdateDeviseRequest;

class DeviseController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDeviseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDeviseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Devise  $devise
     * @return \Illuminate\Http\Response
     */
    public function show(Devise $devise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDeviseRequest  $request
     * @param  \App\Models\Devise  $devise
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDeviseRequest $request, Devise $devise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Devise  $devise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Devise $devise)
    {
        //
    }
}
