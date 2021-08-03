<?php

namespace App\Http\Controllers;

use App\Charts\MonthlyUsersChart;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __invoke(MonthlyUsersChart $chart, Request $request)
    {
        return view('users/index', ['chart' => $chart->build()]);
    }
}
