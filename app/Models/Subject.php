<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'area_id'
    ];

    public function area(): BelongsTo
    {
        return $this->belongsTo(Area::class);
    }

    public function indicators(): HasMany
    {
        return $this->hasMany(Indicator::class);
    }

    public function competences(): HasMany
    {
        return $this->hasMany(Indicator::class);
    }

    public function topics(): HasMany
    {
        return $this->hasMany(Indicator::class);
    }

    public function objetives(): HasMany
    {
        return $this->hasMany(Objetive::class);
    }

    public function problematicalQuestions(): HasMany
    {
        return $this->hasMany(ProblematicalQuestion::class);
    }

    public function standars(): HasMany
    {
        return $this->hasMany(Standard::class);
    }
}
