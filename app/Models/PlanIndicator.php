<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PlanIndicator extends Model
{
    use HasFactory;

    protected $fillable = [
        'area_plan_id',
        'indicator_id'
    ];

    public function indicator(): BelongsTo
    {
        return $this->belongsTo(Indicator::class);
    }
}
