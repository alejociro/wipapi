<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\GradeResource;
use App\Models\Grade;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class GradesController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        $grades = Grade::all();

        return GradeResource::collection($grades);
    }

    public function show(Grade $grade): GradeResource
    {
        return GradeResource::make($grade);
    }
}
