<?php

namespace App\Http\Controllers\ScrambleController;

use App\Http\Controllers\Controller;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

use App\Services\ScrambleService;
use Illuminate\Support\Facades\DB;

class ScrambleController extends Controller
{
    private ScrambleService $scrambleService;

    public function __construct(
        ScrambleService $scrambleService
    )
    {
        $this->scrambleService = $scrambleService;
    }

    public function getScramble(Request $request): JsonResponse
    {
        return new JsonResponse([
            'scramble' => $this->scrambleService->generateScramble()
        ]);
    }
}
