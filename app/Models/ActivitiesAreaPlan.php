<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivitiesAreaPlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'area_plan_id',
        'title',
        'description'
    ];
}
