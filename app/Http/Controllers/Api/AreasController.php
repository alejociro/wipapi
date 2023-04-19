<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AreaRequest;
use App\Http\Resources\Api\AreasResource;
use App\Models\Area;
use App\Models\Grade;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class AreasController extends Controller
{
    public function index(Request $request, Grade $grade): AnonymousResourceCollection
    {
        $areas = Area::whereBelongsTo($grade)
            ->where('name', 'like', '%' . $request->get('search') . '%')
            ->get();

        return AreasResource::collection($areas);
    }

    public function store(AreaRequest $request, Grade $grade): JsonResponse
    {
        $data = [
            'name' => $request->validated()['name'],
            'grade_id' => $grade->getKey()
        ];

        $area = new Area($data);
        $area->save();

        return response()->json(
            [
                'status' => [
                    'status' => 'OK',
                    'message' => 'Profesor creado exitosamente',
                ],
                'data' => [
                    'id' => $area->getKey()
                ],
            ]
        );
    }

    public function show(Area $area): AreasResource
    {
        return AreasResource::make($area);
    }

    public function update(Request $request, Area $area): JsonResponse
    {
        $area->update($request->validated());

        return response()->json(
            [
                'status' => [
                    'status' => 'OK',
                    'message' => 'Area actualzada exitosamente',
                ],
                'data' => [
                    'id' => $area->getKey()
                ],
            ],
        );
    }

    public function destroy(Area $area)
    {
        $area->delete();

        return response()->json(
            [
                'status' => [
                    'status' => 'OK',
                    'message' => 'Area eliminada exitosamente',
                ],
            ]
        );
    }
}
