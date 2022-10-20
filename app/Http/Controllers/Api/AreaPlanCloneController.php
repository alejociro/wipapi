<?php

namespace App\Http\Controllers\Api;

use App\Actions\AreaPlanAction;
use App\Actions\CloneAreaPlanAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\AreaPlanCloneRequest;
use App\Http\Requests\AreaPlanRequest;
use App\Http\Resources\Api\AreaPlanCloneResource;
use App\Http\Resources\Api\AreaPlanResource;
use App\Http\Resources\Api\AreaPlansResource;
use App\Models\Area;
use App\Models\AreaPlanClone;
use App\Models\Group;
use App\Models\AreaPlan;
use App\Models\Grade;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class AreaPlanCloneController extends Controller
{
    public function show(AreaPlanClone $clone)
    {
      return  AreaPlanCloneResource::make($clone);
    }
}
