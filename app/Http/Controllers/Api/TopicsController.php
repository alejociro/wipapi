<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\TopicsResource;
use App\Models\Area;
use App\Models\Subject;
use App\Models\Topic;
use Illuminate\Http\Request;

class TopicsController extends Controller
{
    public function index(Request $request, Area $area)
    {
        $topics = Topic::whereBelongsTo($request->get('subject_id') ? Subject::find($request->get('subject_id')) : $area->subjects)
            ->where('name', 'like', '%' . $request->get('search') . '%')
            ->get();

        return TopicsResource::collection($topics);
    }

    public function store(Request $request)
    {
        $topic = new Topic($request->all());
        $topic->save();

        return response()->json(
            [
                'status' => [
                    'status' => 'OK',
                    'message' => 'Tema creado exitosamente',
                ],
                'data' => [
                    'id' => $topic->getKey()
                ]
            ]
        );
    }

    public function update(Request $request, Topic $topic)
    {
        $topic->update($request->all());

        return response()->json(
            [
                'status' => [
                    'status' => 'OK',
                    'message' => 'Tema actualizada exitosamente',
                ],
            ]
        );
    }

    public function destroy(Topic $topic)
    {
        $topic->delete();

        return response()->json(
            [
                'status' => [
                    'status' => 'OK',
                    'message' => 'Tema eliminado exitosamente',
                ],
            ]
        );
    }
}
