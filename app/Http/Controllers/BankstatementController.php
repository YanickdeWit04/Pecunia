<?php

namespace App\Http\Controllers;

use App\Models\Bankstatement;
use App\Http\Requests\StoreBankstatementRequest;
use App\Http\Requests\UpdateBankstatementRequest;

class BankstatementController extends Controller
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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBankstatementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBankstatementRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bankstatement  $bankstatement
     * @return \Illuminate\Http\Response
     */
    public function show(Bankstatement $bankstatement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bankstatement  $bankstatement
     * @return \Illuminate\Http\Response
     */
    public function edit(Bankstatement $bankstatement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBankstatementRequest  $request
     * @param  \App\Models\Bankstatement  $bankstatement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBankstatementRequest $request, Bankstatement $bankstatement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bankstatement  $bankstatement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bankstatement $bankstatement)
    {
        //
    }
}
