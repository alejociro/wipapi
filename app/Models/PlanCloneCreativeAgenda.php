<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PlanCloneCreativeAgenda extends Model
{
    use HasFactory;

    protected $fillable = [
        'area_plan_clone_id'
    ];

    public function areaPlan(): BelongsTo
    {
        return $this->belongsTo(AreaPlan::class);
    }

    public function activities(): HasMany
    {
        return $this->hasMany(PlanCloneActivitiesCreativeAgenda::class, 'clone_agenda_id');
    }
}
