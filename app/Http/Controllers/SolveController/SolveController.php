<?php

namespace App\Http\Controllers\SolveController;

use App\Http\Controllers\Controller;
use App\Models\Cube;
use App\Models\Solve;
use App\Models\Training;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SolveController extends Controller
{

    public function startTraining(Request $request)
    {
        return view('solve');
    }

    public function store(Request $request): JsonResponse
    {
        $solveTime = $request->request->getInt('solveTime');
        $training = $request->attributes->get('training');

        if (!$solveTime || !$training) {
            return new JsonResponse([], 400);
        }

        Solve::create([
            'solve_time' => $solveTime,
            'user_id' => 1,
            'training_id' => $training->getKey()
        ]);

        return new JsonResponse([
            'valid' => true
        ]);
    }
}
