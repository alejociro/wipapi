<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ObjetivesResource;
use App\Models\Area;
use App\Models\Objetive;
use Illuminate\Http\Request;

class ObjetivesController extends Controller
{
    public function index(Request $request, Area $area)
    {
        $indicators = Objetive::whereBelongsTo($area->subjects)
            ->where('description', 'like', '%' . $request->get('search') . '%')
            ->get();

        return ObjetivesResource::collection($indicators);
    }
    public function store(Request $request)
    {
        $objetive = new Objetive($request->all());
        $objetive->save();

        return response()->json(
            [
                'status' => [
                    'status' => 'OK',
                    'message' => 'Objetivo creado exitosamente',
                ],
                'data' => [
                    'id' => $objetive->getKey()
                ]
            ]
        );
    }

    public function update(Request $request, Objetive $objetive)
    {
        $objetive->update($request->all());

        return response()->json(
            [
                'status' => [
                    'status' => 'OK',
                    'message' => 'Objetivo actualizada exitosamente',
                ],
            ]
        );
    }

    public function destroy(Objetive $objetive)
    {
        $objetive->delete();

        return response()->json(
            [
                'status' => [
                    'status' => 'OK',
                    'message' => 'Objetivo eliminado exitosamente',
                ],
            ]
        );
    }
}
