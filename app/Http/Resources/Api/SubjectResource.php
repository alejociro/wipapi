<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class SubjectResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->getKey(),
            'name' => $this->name,
            'area' => AreasResource::make($this->area),
            'objetives' => $this->objectives,
            'competences' => $this->competences,
            'indicators' => $this->indicator,
            'topics' => $this->topics,
        ];
    }
}
