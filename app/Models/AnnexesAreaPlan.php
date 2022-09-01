<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnexesAreaPlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'area_plan_id',
        'title',
        'type',
        'value'
    ];
}
