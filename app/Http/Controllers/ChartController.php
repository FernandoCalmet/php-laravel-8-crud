<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    //
    public function index()
    {
        $users = User::select(DB::raw("COUNT(*) as count"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('count');

        $months = User::select(DB::raw("Month(created_at) as month"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('month');

        $data = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

        foreach($months as $index => $month){
            $data[$month] = $users[$index];
        }

        return view('chart.highchart', compact('data'));
    }

    public function barChart()
    {
        $users = User::select(DB::raw("COUNT(*) as count"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('count');

        $months = User::select(DB::raw("Month(created_at) as month"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('month');

        $data = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

        foreach($months as $index => $month){
            $data[$month] = $users[$index];
        }

        return view('chart.barchart', compact('data'));
    }
}
