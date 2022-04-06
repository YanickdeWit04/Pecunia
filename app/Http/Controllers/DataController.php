<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DataController extends Controller
{
    public function GetData()
    {
        $date = Auth::user()->Bankstatements->date;
        $amount = Auth::user()->Bankstatements->amount;
        $data[] = ['date'=>$date, 'amount'=>$amount];
        foreach ($data as $key => $val) {
            $data[++$key] = [$val->date, (int)$val->amount];
            return view('home')->with('data', json_encode($data));
        }
    }
}
