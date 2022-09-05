<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ActiviesCreativeAgenda extends Model
{
    use HasFactory;

    protected $fillable = [
        'plan_creative_agenda_id',
        'title',
        'description'
    ];

    public function creativeAgenda(): BelongsTo
    {
        return $this->belongsTo(PlanCreativeAgenda::class);
    }
}
