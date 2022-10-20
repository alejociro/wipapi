<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class AreaPlanCloneResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $plan = $this->areaPlan;
        return [
            'id' => $this->id,
            'name' => $plan->name,
            'week' => $plan->week,
            'user' => $this->user->name,
            'area' => $plan->area,
            'grade' => $plan->area->grade,
            'question' => $plan->question,
            'orientations' => $plan->orientations,
            'adaptations' => $plan->adaptations,
            'indicators' => $plan->planIndicators()->with('indicator', 'indicator.subject')->get(),
            'topics' => $plan->planTopics()->with('topic', 'topic.subject')->get(),
            'activities' => $this->planActivities,
            'tasks' => $this->planTasks,
            'annexes' => $this->planAnnexes,
            'parent' => $plan,
            'group' => $this->group,
            'references' => $this->planReferences,
            'competences' => $plan->planCompetences()->with('competence', 'competence.subject')->get(),
            'creative_agenda' => $this->planCreativeAgenda()->with('activities')->first(),
            'initial_date' => $plan->initial_date,
            'end_date' => $plan->end_date,
            'createdAt' => $this->created_at->format('Y-m-d h:m:s'),
            'updatedAt' => $this->updated_at->format('Y-m-d h:m:s')
        ];
    }
}
