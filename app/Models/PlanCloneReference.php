<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanCloneReference extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'value',
        'author',
        'area_plan_clone_id'
    ];
}
