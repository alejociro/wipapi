<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanCloneActivitiesCreativeAgenda extends Model
{
    use HasFactory;

    protected $fillable = [
      'clone_agenda_id',
      'title',
      'description'
    ];
}
