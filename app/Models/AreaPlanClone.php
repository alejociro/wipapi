<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AreaPlanClone extends Model
{
    use HasFactory;

    protected $fillable = [
        'question',
        'orientations',
        'adaptations',
        'user_clone',
        'group_id',
        'area_plan_id'
    ];

    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class);
    }
}
