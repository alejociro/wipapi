<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TypeStandard extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'subject_id'
    ];

    public function standards(): HasMany
    {
        return $this->hasMany(Standard::class);
    }

    public function subject():BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }
}
