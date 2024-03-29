<?php

namespace App\Http\Controllers\Api;

use App\Actions\SubjectStoreAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\SubjectRequest;
use App\Http\Resources\Api\SubjectResource;
use App\Models\Grade;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SubjectController extends Controller
{
    public function store(SubjectRequest $request, SubjectStoreAction $action)
    {
        $areaPlan = $action->setData($request->validated())->execute()->getModel();

        return response()->json(
            [
                'status' => [
                    'status' => 'OK',
                    'reason' => 'OK'
                ],
                'data' => [
                    'id' => $areaPlan->getKey()
                ]
            ]);
    }

    public function update(Request $request,Subject $subject)
    {
        $subject->update($request->toArray());

        return response()->json(
            [
                'status' => [
                    'status' => 'OK',
                    'message' => 'Materia actualizada exitosamente',
                ],
            ]
        );
    }

    public function show(Subject $subject): SubjectResource
    {
        return SubjectResource::make($subject);
    }

    public function destroy(Subject $subject)
    {
        $subject->delete();
        return response()->json(
            [
                'status' => [
                    'status' => 'OK',
                    'message' => 'Materia eliminado exitosamente',
                ],
            ]
        );
    }
}
