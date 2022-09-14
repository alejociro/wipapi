<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\AreasResource;
use App\Models\Area;
use App\Models\Grade;
use Illuminate\Http\Request;

class AreasController extends Controller
{
    public function index(Request $request, Grade $grade)
    {
        $areas = Area::whereBelongsTo($grade)
            ->where('name', 'like', '%' . $request->get('search') . '%')
            ->get();

        return AreasResource::collection($areas);
    }
}
