<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreaPlanClone extends Model
{
    use HasFactory;

    protected $fillable = [
        'question',
        'orientations',
        'adaptations',
        'user_clone',
        'area_plan_id'
    ];
}
