<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanCloneActivitie extends Model
{
    use HasFactory;

    protected $fillable = [
      'title',
      'description',
      'done',
      'area_plan_clone_id'
    ];
}
