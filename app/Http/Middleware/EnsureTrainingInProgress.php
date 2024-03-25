<?php

namespace App\Http\Middleware;

use App\Models\Training;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $uid = Auth::id();

        $training = Training::todaysNotEndedTraining($uid)->first();

        if (!$training) {
            $training = new Training([
                'user_id' => $uid,
                'has_ended' => false,
                'cube_id' => null
            ]);

            $training->save();
        }

        $request->attributes->add(['training' => $training]);

        return $next($request);
    }
}
