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
use Illuminate\Support\Facades\Auth;

class SolveController extends Controller
{

    public function startTraining(Request $request)
    {
        $training = $request->attributes->get('training');

        return view('solve', [
            'cubes' => Cube::all(),
            'training' => $training
        ]);
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

    public function chooseCube(Request $request): JsonResponse
    {
        $uid = Auth('sanctum')->id();

        $cubeId = $request->request->getInt('cube_id');
        if (!$cubeId) return new JsonResponse(['error' => 'Cube id not set.'], 400);
        $training = Training::todaysNotEndedTraining($uid)->first();
        $training->fill(['cube_id' => $cubeId]);
        $training->save();

        return new JsonResponse([
            'valid' => true
        ]);
    }
}
