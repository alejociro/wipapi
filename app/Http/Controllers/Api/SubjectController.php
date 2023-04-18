<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\IndicatorsResource;
use App\Http\Resources\Api\SubjectResource;
use App\Models\Area;
use App\Models\AreaPlan;
use App\Models\Grade;
use App\Models\Indicator;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SubjectController extends Controller
{
    public function index(Request $request, Grade $grade)
    {
        // TODO:: FILTER BY GRADE
        Log::info('entre', [Subject::all()]);
        return SubjectResource::collection(Subject::all());
    }
}
