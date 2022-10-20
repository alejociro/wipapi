<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_clone');
    }

    public function areaPlan(): BelongsTo
    {
        return $this->belongsTo(AreaPlan::class);
    }

    public function planTasks(): HasMany
    {
        return $this->hasMany(PlanCloneTask::class);
    }

    public function planAnnexes(): HasMany
    {
        return $this->hasMany(PlanCloneAnnexe::class);
    }

    public function planReferences(): HasMany
    {
        return $this->hasMany(PlanCloneReference::class);
    }

    public function planActivities(): HasMany
    {
        return $this->hasMany(PlanCloneActivitie::class);
    }

    public function planCreativeAgenda(): HasMany
    {
        return $this->hasMany(PlanCloneCreativeAgenda::class, 'area_plan_clone_id');
    }
}
