<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PlanCloneActivitiesCreativeAgenda;
use Illuminate\Http\Request;

class ActivitiesCreativeAgendaCloneController extends Controller
{
    public function UpdateDescription(PlanCloneActivitiesCreativeAgenda $activitie, Request $request): void
    {
        $activitie->description = $request['description'];
        $activitie->save();
    }
}
