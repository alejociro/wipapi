<?php

namespace App\Http\Resources\Api;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class AreaPlansResource extends JsonResource
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
            'name' => $this->name,
            'week' => $this->week,
            'status' => (now()->between(Carbon::createFromDate($this->initial_date),  Carbon::createFromDate($this->end_date))) ? 'ACTIVE' : (Carbon::createFromDate($this->end_date) > now() ? 'COMPLETED' : 'PENDING'),
            'author' => $this->user->name,
            'area' => $this->area,
            'startDate' => $this->initial_date,
            'endDate' => $this->end_date,
            'createdAt' => $this->created_at->format('Y-m-d h:m:s'),
            'updatedAt' => $this->updated_at->format('Y-m-d h:m:s')
        ];
    }
}
