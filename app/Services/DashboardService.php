<?php

namespace App\Services;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardService {
    public function getDashboardUserData(): array
    {
        return [
            'fastest_solve' => $this->msToString($this->getFastestSolve()),
            'solves_today' => $this->getSolvesToday(),
            'streak' => 0
        ];
    }

    private function getFastestSolve(): int
    {
        return DB::table('solves')->where("user_id", "=", Auth::id())->min('solve_time') ?? 0;
    }

    private function getSolvesToday(): int
    {
        return DB::table('solves')->whereDate('created_at', Carbon::today())->where("user_id", "=", Auth::id())->count('*');
    }

    private function msToString(int $milliseconds): string
    {
        $minutes = (int)($milliseconds / 60000);
        $milliseconds = $milliseconds - $minutes * 60000;

        $seconds = (int)($milliseconds / 1000);
        $milliseconds = $milliseconds - $seconds * 1000;

        return sprintf("%02d:%02d:%02d", $minutes, $seconds, $milliseconds);
    }
}
