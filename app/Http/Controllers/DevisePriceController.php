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
       //":1,"":"40000","":"40000","level":"4000" 
        DevisePrice::create([
                "devise_id" => $request->devise_id,
                "buy_at" => $request->buy_at ,
                "sell_at" => $request->sell_at,
                "level" => $request->level,
        ]);

        return [
            "success" => "enregistrement réussi",
            "hello" => $request->all(),
        ];
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
