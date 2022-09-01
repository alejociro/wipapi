<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class PlanIndicatorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'indicator_id' => $this->letter,
            'area_plan_id' => $this->area_plan_id,
            'createdAt' => $this->created_at->format('Y-m-d h:m:s'),
            'updatedAt' => $this->updated_at->format('Y-m-d h:m:s')
        ];
    }
}
