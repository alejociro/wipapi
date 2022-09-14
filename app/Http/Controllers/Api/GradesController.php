<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\GradeResource;
use App\Models\Grade;
use Illuminate\Http\Request;

class GradesController extends Controller
{
    public function index()
    {
        $grades = Grade::all();

        return GradeResource::collection($grades);
    }
}
