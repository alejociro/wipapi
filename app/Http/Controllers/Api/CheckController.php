<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PlanCloneActivitie;
use App\Models\PlanCloneTask;
use Illuminate\Http\Request;

class CheckController extends Controller
{
    public function checkActivity(PlanCloneActivitie $activitie):void
    {
        $activitie->done = !$activitie->done;
        $activitie->save();
    }

    public function checkTask(PlanCloneTask $task):void
    {
        $task->done = !$task->done;
        $task->save();
    }
}
