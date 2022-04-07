<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use DateInterval;
use DatePeriod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SampleChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {

        $graphData = $this->balance();
        return Chartisan::build()
            ->labels($graphData['labels'])
            ->dataset('inkomsten', $graphData['values']);
    }
    public function balance($date = null){
        $date = new \DateTime(now()->toString());
        $date->modify('first day of this month');
        $firstday = $date->format('Y-m-d');
        $date->modify('last day of this month');
        $lastday = $date->format('Y-m-d');
        $period = new DatePeriod(
            new \DateTime($firstday),
            new \DateInterval('P1D'),
            new \DateTime($lastday)
        );

        $dates = [];
        $amounts = [];
        foreach($period as $key => $value) {
            $dates[] = $value->format('Y-m-d');
            $amounts[] = DB::select("select sum(amount) as balance from bankstatements where date <= ?",[$value])[0]->balance;
        }

        return  ['labels'=>$dates,'values'=>$amounts];
    }
}
