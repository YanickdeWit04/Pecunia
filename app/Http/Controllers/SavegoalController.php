<?php

namespace App\Http\Controllers;

use App\Models\Savegoal;
use App\Http\Requests\StoreSavegoalRequest;
use App\Http\Requests\UpdateSavegoalRequest;

class SavegoalController extends Controller
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
     * @param  \App\Http\Requests\StoreSavegoalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSavegoalRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Savegoal  $savegoal
     * @return \Illuminate\Http\Response
     */
    public function show(Savegoal $savegoal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Savegoal  $savegoal
     * @return \Illuminate\Http\Response
     */
    public function edit(Savegoal $savegoal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSavegoalRequest  $request
     * @param  \App\Models\Savegoal  $savegoal
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSavegoalRequest $request, Savegoal $savegoal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Savegoal  $savegoal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Savegoal $savegoal)
    {
        //
    }
}
