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
            'grade' => $this->area->grade,
            'objetives' => $this->objetives,
            'competences' => $this->competences,
            'indicators' => $this->indicators,
            'topics' => $this->topics,
        ];
    }
}
