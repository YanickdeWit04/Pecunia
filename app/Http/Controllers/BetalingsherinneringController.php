<?php

namespace App\Http\Controllers;

use App\Models\betalingsherinnering;
use App\Http\Requests\StorebetalingsherinneringRequest;
use App\Http\Requests\UpdatebetalingsherinneringRequest;

class BetalingsherinneringController extends Controller
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
     * @param  \App\Http\Requests\StorebetalingsherinneringRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorebetalingsherinneringRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\betalingsherinnering  $betalingsherinnering
     * @return \Illuminate\Http\Response
     */
    public function show(betalingsherinnering $betalingsherinnering)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\betalingsherinnering  $betalingsherinnering
     * @return \Illuminate\Http\Response
     */
    public function edit(betalingsherinnering $betalingsherinnering)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebetalingsherinneringRequest  $request
     * @param  \App\Models\betalingsherinnering  $betalingsherinnering
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatebetalingsherinneringRequest $request, betalingsherinnering $betalingsherinnering)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\betalingsherinnering  $betalingsherinnering
     * @return \Illuminate\Http\Response
     */
    public function destroy(betalingsherinnering $betalingsherinnering)
    {
        //
    }
}
