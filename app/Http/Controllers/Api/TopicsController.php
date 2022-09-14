<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\TopicsResource;
use App\Models\Area;
use App\Models\Topic;
use Illuminate\Http\Request;

class TopicsController extends Controller
{
    public function index(Request $request, Area $area)
    {
        $topics = Topic::whereBelongsTo($area->subjects)
            ->where('name', 'like', '%' . $request->get('search') . '%')
            ->get();

        return TopicsResource::collection($topics);
    }
}
