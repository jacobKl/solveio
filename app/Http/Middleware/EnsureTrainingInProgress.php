<?php

namespace App\Http\Middleware;

use App\Models\Training;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureTrainingInProgress
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $training = Training::todaysNotEndedTraining(1)->first();

        if (!$training) {
            $training = new Training([
                'user_id' => 1,
                'has_ended' => false
            ]);

            $training->save();
        }

        $request->attributes->add(['training' => $training]);

        return $next($request);
    }
}
