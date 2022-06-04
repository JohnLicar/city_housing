<?php

namespace App\Http\Controllers;

use App\Charts\SummaryChart;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(SummaryChart $chart)
    {
        return view('dashboard', ['chart' => $chart->build()]);
    }
}
