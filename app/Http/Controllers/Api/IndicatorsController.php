<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\IndicatorsResource;
use App\Models\Area;
use App\Models\AreaPlan;
use App\Models\Indicator;
use App\Models\Subject;
use Illuminate\Http\Request;

class IndicatorsController extends Controller
{
    public function index(Request $request, Area $area)
    {
        $indicators = Indicator::whereBelongsTo($request->get('subject_id') ? Subject::find($request->get('subject_id')) : $area->subjects)
            ->where('description', 'like', '%' . $request->get('search') . '%')
            ->get();

        return IndicatorsResource::collection($indicators);
    }

    public function store(Request $request)
    {
        $indicator = new Indicator($request->all());
        $indicator->save();

        return response()->json(
            [
                'status' => [
                    'status' => 'OK',
                    'message' => 'Indicador creado exitosamente',
                ],
                'data' => [
                    'id' => $indicator->getKey()
                ]
            ]
        );
    }

    public function update(Request $request, Indicator $indicator)
    {
        $indicator->update($request->all());

        return response()->json(
            [
                'status' => [
                    'status' => 'OK',
                    'message' => 'Indicador actualizado exitosamente',
                ],
            ]
        );
    }

    public function destroy(Indicator $indicator)
    {
        $indicator->delete();

        return response()->json(
            [
                'status' => [
                    'status' => 'OK',
                    'message' => 'Indicador eliminado exitosamente',
                ],
            ]
        );
    }
}
