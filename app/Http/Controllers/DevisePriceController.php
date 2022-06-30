<?php

namespace App\Http\Controllers;

use App\Models\DevisePrice;
use App\Http\Requests\StoreDevisePriceRequest;
use App\Http\Requests\UpdateDevisePriceRequest;

class DevisePriceController extends Controller
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
     * @param  \App\Http\Requests\StoreDevisePriceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDevisePriceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DevisePrice  $devisePrice
     * @return \Illuminate\Http\Response
     */
    public function show(DevisePrice $devisePrice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDevisePriceRequest  $request
     * @param  \App\Models\DevisePrice  $devisePrice
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDevisePriceRequest $request, DevisePrice $devisePrice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DevisePrice  $devisePrice
     * @return \Illuminate\Http\Response
     */
    public function destroy(DevisePrice $devisePrice)
    {
        //
    }
}
