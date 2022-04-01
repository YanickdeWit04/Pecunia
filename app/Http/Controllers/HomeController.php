<?php

namespace App\Http\Controllers;

use App\Models\Bankstatement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $transacties = Auth::user()->BankStatements;
        $sum = Bankstatement::sum('amount');
        return view('home')->with(['transacties'=>$transacties, 'sum'=>$sum]);
    }
}
