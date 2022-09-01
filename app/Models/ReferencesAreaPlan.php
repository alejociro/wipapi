<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferencesAreaPlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'area_plan_id',
        'title',
        'value',
        'author'
    ];
}
