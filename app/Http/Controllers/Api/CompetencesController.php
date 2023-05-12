<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\CompetencesResource;
use App\Models\Area;
use App\Models\Competence;
use App\Models\Objetive;
use App\Models\Subject;
use App\Models\Topic;
use Illuminate\Http\Request;

class CompetencesController extends Controller
{
    public function index(Request $request, Area $area)
    {
        $competences = Competence::whereBelongsTo($request->get('subject_id') ? Subject::find($request->get('subject_id')) : $area->subjects)
            ->where('description', 'like', '%' . $request->get('search') . '%')
            ->get();

        return CompetencesResource::collection($competences);
    }

    public function store(Request $request)
    {
        $competence = new Competence($request->all());
        $competence->save();

        return response()->json(
            [
                'status' => [
                    'status' => 'OK',
                    'message' => 'Competencia creada exitosamente',
                ],
                'data' => [
                    'id' => $competence->getKey()
                ]
            ]
        );
    }

    public function update(Request $request, Competence $competence)
    {
        $competence->update($request->all());

        return response()->json(
            [
                'status' => [
                    'status' => 'OK',
                    'message' => 'Competencia actualizada exitosamente',
                ],
            ]
        );
    }

    public function destroy(Competence $competence)
    {
        $competence->delete();

        return response()->json(
            [
                'status' => [
                    'status' => 'OK',
                    'message' => 'Competencia eliminada exitosamente',
                ],
            ]
        );
    }
}
