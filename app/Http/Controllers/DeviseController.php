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
        $devises = Devise::with('devisePrices')->get();

        $data = [];
        foreach ($devises as $v){
            $keys = $v->devisePrices->keys()->last() ?? 0;
            $last = ($v->devisePrices[$keys] ?? []);

            $x = [
                "id" => $v->id,
                "name" => $v->name,
                "country" => $v->country,
                "buy_at" => numberFormat(($last["buy_at"] ?? 0)),
                "sell_at" =>  numberFormat(($last["sell_at"] ?? 0)),
                "level" =>  numberFormat(($last["level"] ?? 0)),
            ];
            $data[] = $x;
           
        }

        $getData = collect($data)->sortBy([
             ['buy_at', 'desc'],
             ['sell_at', 'desc'],
        ]);

        return $getData;
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
