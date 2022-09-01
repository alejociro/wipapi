<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'letter',
        'grade_id'
    ];

    public function grade(): BelongsTo
    {
        return $this->belongsTo(Grade::class);
    }
}
