<?php

namespace App\Http\Controllers\SolveController;

use App\Http\Controllers\Controller;
use App\Models\Solve;
use Illuminate\Http\Request;

class SolveController extends Controller
{
    public function newSolve(Request $request) {
        $solveTime = $request->request->getInt('solveTime');

        Solve::create([
            'solve_time' => $solveTime,
            'user_id' => 1
        ]);

    }
}
