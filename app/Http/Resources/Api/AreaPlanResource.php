<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class AreaPlanResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'week' => $this->week,
            'user' => $this->user_id,
            'area' => $this->area,
            'question' => $this->question,
            'orientations' => $this->orientations,
            'adaptations' => $this->adaptations,
            'indicators' => $this->planIndicators,
            'topics' => $this->planTopics,
            'tasks' => $this->planTasks,
            'annexes' => $this->planAnnexes,
            'references' => $this->planReferences,
            'competences' => $this->planCompetences,
            'creative_agenda' => $this->planCreativeAgenda,
            'initial_date' => $this->initial_date,
            'end_date' => $this->end_date,
            'createdAt' => $this->created_at->format('Y-m-d h:m:s'),
            'updatedAt' => $this->updated_at->format('Y-m-d h:m:s')
        ];
    }
}
