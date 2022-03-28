<?php

namespace App\Http\Controllers;

use App\Models\Bankstatement;
use App\Http\Requests\StoreBankstatementRequest;
use App\Http\Requests\UpdateBankstatementRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Database\Eloquent\Model;

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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|Response
     */
    public function create(Request $request)
    {
        return view('addstatement');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBankstatementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBankstatementRequest $request)
    {
        $amount = $request->amount;
        $name = $request->name;

        $category_id = (int)$request->category;
        $type = (boolean)$request->type_of_statement;
        $date = $request->date;
        $data = ['amount'=>$amount, 'name'=>$name, 'category_id'=>$category_id, 'type'=>$type,'date'=>$date];
        Bankstatement::create($data);
        echo "Transactie opgeslagen!";
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
