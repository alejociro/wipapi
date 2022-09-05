<?php

namespace App\Http\Controllers\Api;

use App\Actions\AreaPlanAction;
use App\Actions\CloneAreaPlanAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\AreaPlanCloneRequest;
use App\Http\Requests\AreaPlanRequest;
use App\Http\Resources\Api\AreaPlanResource;
use App\Http\Resources\Api\AreaPlansResource;
use App\Models\AreaPlan;
use Illuminate\Http\Request;

class AreaPlanController extends Controller
{
    public function index(Request $request)
    {
        $plans = AreaPlan::where('name', 'like', '%' . $request->get('search') . '%')
            ->get();

       return AreaPlansResource::collection($plans);
    }

    public function store(AreaPlanRequest $request, AreaPlanAction $action)
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

    public function show($id)
    {
     $areaPlan = AreaPlan::find($id);
      return  AreaPlanResource::make($areaPlan);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function clone(AreaPlanCloneRequest $request, CloneAreaPlanAction $action)
    {
        $areaPlanClone = $action->setData($request->validated())->execute()->getModel();

        return response()->json(
            [
                'status' => [
                    'status' => 'OK',
                    'reason' => 'OK'
                ],
                'data' => [
                    'id' => $areaPlanClone->getKey()
                ]
            ]);
    }
}
