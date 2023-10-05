<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function target()

    {
        $sales = [
            'ahmed' => ['Jan' => 50, 'Feb' => 60, 'March' => 70],
            'Raghda' => ['Jan' => 80, 'Feb' => 90, 'March' => 100],
            'Yehia' => ['Jan' => 110, 'Feb' => 120, 'March' => 130],
            'Celia' => ['Jan' => 140, 'Feb' => 150, 'March' => 160]
        ];

        return view('sales', compact('sales'));
    }
}
