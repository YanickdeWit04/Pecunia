<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SampleChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $data = Auth::user()->bankstatements()->orderBy('date', 'asc')->Where('amount', '>', '0')
            ->groupBy('date')->selectRaw('sum(amount) as amount, date')->get();
      //  json_encode($data);
        $graphData = [];
        foreach($data as $row){
            if (isset($row['amount'])) {
                $graphData[$row['date']] = $row['amount'];
            };
        }
        return Chartisan::build()
            ->labels(array_keys($graphData))
            ->dataset('inkomsten', array_values($graphData));
    }
}
