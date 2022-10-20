<?php

namespace App\Http\Controllers\Api;

use App\Actions\AreaPlanAction;
use App\Actions\CloneAreaPlanAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\AreaPlanRequest;
use App\Http\Resources\Api\AreaPlanResource;
use App\Http\Resources\Api\AreaPlansResource;
use App\Models\Area;
use App\Models\AreaPlan;
use App\Models\Grade;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class AreaPlanController extends Controller
{
    public function index(Request $request)
    {
        $plans = AreaPlan::where('name', 'like', '%' . $request->get('search') . '%')
            ->get();

       return AreaPlansResource::collection($plans);
    }

    public function indexByGrade(Request $request, Grade $grade, Area $area): AnonymousResourceCollection
    {
        $plans =  $area->areaPlans()->where('name', 'like', '%' . $request->get('search') . '%')->get();

       return AreaPlansResource::collection($plans);
    }

    public function store(AreaPlanRequest $request, Area $area, AreaPlanAction $action)
    {
        $areaPlan = $action->setData(array_merge($request->validated(), ['area_id' => $area->getKey()]))->execute()->getModel();

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

    public function show(AreaPlan $areaPlan)
    {
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

    public function clone(AreaPlan $plan, CloneAreaPlanAction $action)
    {
        $areaPlanClone = $action->setData([
            'area_plan' => $plan
        ])->execute()->getModel();

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
