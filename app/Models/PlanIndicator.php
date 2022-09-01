<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanIndicator extends Model
{
    use HasFactory;

    protected $fillable = [
        'area_plan_id',
        'indicator_id'
    ];
}
