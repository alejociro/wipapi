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
            'name' => $this->name,
            'week' => $this->week,
            'user' => $this->user_id,
            'area' => $this->area,
            'grade' => $this->area->grade,
            'question' => $this->question,
            'orientations' => $this->orientations,
            'adaptations' => $this->adaptations,
            'indicators' => $this->planIndicators()->with('indicator', 'indicator.subject')->get(),
            'topics' => $this->planTopics()->with('topic', 'topic.subject')->get(),
            'activities' => $this->planActivities,
            'tasks' => $this->planTasks,
            'annexes' => $this->planAnnexes,
            'sons' => $this->sons()->with('group')->get(),
            'references' => $this->planReferences,
            'competences' => $this->planCompetences()->with('competence', 'competence.subject')->get(),
            'creative_agenda' => $this->planCreativeAgenda()->with('activities')->first(),
            'initial_date' => $this->initial_date,
            'end_date' => $this->end_date,
            'createdAt' => $this->created_at->format('Y-m-d h:m:s'),
            'updatedAt' => $this->updated_at->format('Y-m-d h:m:s')
        ];
    }
}
