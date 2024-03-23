<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;

    protected $fillable = [
        'ended_at',
        'user_id',
        'has_ended'
    ];

    public function scopeTodaysNotEndedTraining(Builder $query, $userId)
    {
        return $query->whereDate('created_at', Carbon::today())->where('user_id', '=', $userId);
    }
}
