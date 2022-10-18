<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PlanCompetence extends Model
{
    use HasFactory;

    public function competence(): BelongsTo
    {
        return $this->belongsTo(Competence::class);
    }
}
