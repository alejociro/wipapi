<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopicsAreaPlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'area_plan_id',
        'topic_id'
    ];
}
