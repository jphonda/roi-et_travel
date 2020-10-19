<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashBroadController extends Controller
{
    public function index()
    {
        $score = 0;
        $travel = DB::select('SELECT * FROM `tb_place`');
        $otop = DB::select('SELECT * FROM `tb_otop`');
        foreach ($travel as $key => $value) {
            $score = $value->score + $score;
        }
        $sum = array([
            'otop' => count($otop),
            'place' => count($travel),
            'score' => $score
        ]);

        return view('admin.component.dashboard')
            ->with('datas', $travel)
            ->with('otop', $otop)
            ->with('sum', $sum);
    }
}
