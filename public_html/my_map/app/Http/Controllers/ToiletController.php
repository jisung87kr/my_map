<?php

namespace App\Http\Controllers;

use App\Models\Toilet;
use Illuminate\Http\Request;

class ToiletController extends MapController
{
    public function index($address)
    {
        $result = $this->getRequestData(Toilet::class, $address);
        return $this->responseIndex($result);
    }

    public function responseIndex($result)
    {
        return $result;
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Toilet  $toilet
     * @return \Illuminate\Http\Response
     */
    public function show(Toilet $toilet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Toilet  $toilet
     * @return \Illuminate\Http\Response
     */
    public function edit(Toilet $toilet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Toilet  $toilet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Toilet $toilet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Toilet  $toilet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Toilet $toilet)
    {
        //
    }
}
