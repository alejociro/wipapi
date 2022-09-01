<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\CompetencesResource;
use App\Models\Area;
use App\Models\Competence;
use Illuminate\Http\Request;

class CompetencesController extends Controller
{
    public function index(Request $request, Area $area)
    {
        $competences = Competence::with('subjects', fn($query) => $query->where('area_id', $area->getKey()))
            ->where('description', 'like', '%' . $request->get('search') . '%')
            ->get();

        return CompetencesResource::collection($competences);
    }
}
