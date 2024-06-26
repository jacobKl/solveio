<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solve extends Model
{
    use HasFactory;

    protected $fillable = [
        'solve_time',
        'user_id',
        'training_id'
    ];
}
