<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanCloneTask extends Model
{
    use HasFactory;

    protected $fillable = [
        'area_plan_clone_id',
        'title',
        'description',
        'activity_plan_clone_id'
    ];
}
