<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBankstatementRequest;
use App\Http\Requests\UpdateBankstatementRequest;
use App\Models\Bankstatement;
use App\Models\Savegoal;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SpaardoelenController extends Controller
{
    //
    public function store(Request $request)
    {
        Auth::user()->savegoals()->create($request->all());
        return view('spaardoelopgeslagen');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   return view('savings');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|Response
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBankstatementRequest  $request
     * @return \Illuminate\Http\Response
     */

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
