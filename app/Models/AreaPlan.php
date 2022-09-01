<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class AreaPlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'week',
        'user_id',
        'area_id',
        'question',
        'orientations',
        'adaptations',
        'initial_date',
        'end_date'
    ];

    public function planIndicators(): HasMany
    {
        return $this->hasMany(PlanIndicator::class);
    }

    public function planTopics(): HasMany
    {
        return $this->hasMany(TopicsAreaPlan::class);
    }

    public function planTasks(): HasMany
    {
        return $this->hasMany(TasksAreaPlan::class);
    }

    public function planAnnexes(): HasMany
    {
        return $this->hasMany(AnnexesAreaPlan::class);
    }

    public function planReferences(): HasMany
    {
        return $this->hasMany(ReferencesAreaPlan::class);
    }

    public function planCompetences(): HasMany
    {
        return $this->hasMany(PlanCompetence::class);
    }

    public function planCreativeAgenda(): HasOne
    {
        return $this->hasOne(PlanCreativeAgenda::class);
    }

    public function area(): BelongsTo
    {
        return $this->belongsTo(Area::class);
    }
}
