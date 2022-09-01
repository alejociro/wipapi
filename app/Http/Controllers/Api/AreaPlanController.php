<?php

namespace App\Http\Controllers\Api;

use App\Actions\AreaPlanAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\AreaPlanRequest;
use App\Http\Resources\Api\AreaPlanResource;
use App\Http\Resources\Api\AreaPlansResource;
use App\Models\AreaPlan;
use Illuminate\Http\Request;

class AreaPlanController extends Controller
{
    public function index(Request $request)
    {
        $plans = AreaPlan::where('description', 'like', '%' . $request->get('search') . '%')
            ->get();

        AreaPlansResource::collection($plans);
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
        return AreaPlanResource::collection(AreaPlan::find($id));
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
}
