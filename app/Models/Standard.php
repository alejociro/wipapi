<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Standard extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'type_standard_id'
    ];

    public function typeStandard(): BelongsTo
    {
        return $this->belongsTo(TypeStandard::class);
    }
}
