<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\IndicatorsResource;
use App\Models\Area;
use App\Models\AreaPlan;
use App\Models\Indicator;
use Illuminate\Http\Request;

class IndicatorsController extends Controller
{
    public function index(Request $request, Area $area)
    {
        $indicators = Indicator::whereBelongsTo($area->subjects)
            ->where('description', 'like', '%' . $request->get('search') . '%')
            ->get();

        return IndicatorsResource::collection($indicators);
    }
}
