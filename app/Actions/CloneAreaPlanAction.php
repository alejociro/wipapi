<?php

namespace App\Actions;

use App\Models\AreaPlan;
use App\Models\AreaPlanClone;
use App\Models\PlanCloneActivitie;
use App\Models\PlanCloneActivitiesCreativeAgenda;
use App\Models\PlanCloneAnnexe;
use App\Models\PlanCloneCreativeAgenda;
use App\Models\PlanCloneReference;
use App\Models\PlanCloneTask;

class CloneAreaPlanAction extends Action
{
    public function execute(): self
    {
        $this->setModel(new AreaPlanClone());
//        $this->model->question = $this->data['question'];
//        $this->model->orientations = json_encode($this->data['orientations'], true);
//        $this->model->adaptations = json_encode($this->data['adaptations'], true);
        $this->model->user_clone = $this->data['user_id'];
        $this->model->group_id = $this->data['group_id'];
        $this->model->area_plan_id = $this->data['area_plan_id'];
        $this->model->save();

//        $this->tasks();
//        $this->activities();
//        $this->annexes();
//        $this->references();
//        $this->creativeAgenda();

        return $this;
    }

    public function tasks(): void
    {
        foreach ($this->data['tasks'] as $taskInfo) {
            $task = new PlanCloneTask();
            $task->area_plan_clone_id = $this->model->getKey();
            $task->title = $taskInfo['title'];
            $task->description = $taskInfo['description'];
            $task->save();
        }
    }

    public function activities(): void
    {
        foreach ($this->data['activities'] as $activityInfo){
            $activity = new PlanCloneActivitie();
            $activity->title = $activityInfo['title'];
            $activity->description = $activityInfo['description'];
            $activity->area_plan_clone_id = $this->model->getKey();
            $activity->save();
        };
    }

    public function annexes(): void
    {
        foreach ($this->data['annexes'] as $annexInfo){
            $annex = new PlanCloneAnnexe();
            $annex->title = $annexInfo['title'];
            $annex->type = $annexInfo['type'];
            $annex->value = $annexInfo['value'];
            $annex->area_plan_clone_id = $this->model->getKey();
            $annex->save();
        };
    }

    public function references(): void
    {
        foreach ($this->data['references'] as $referenceInfo){
            $reference = new PlanCloneReference();
            $reference->title = $referenceInfo['title'];
            $reference->value = $referenceInfo['value'];
            $reference->author = $referenceInfo['author'];
            $reference->area_plan_clone_id = $this->model->getKey();
            $reference->save();
        }
    }

    public function creativeAgenda(): void
    {
        $creativeAngeda = new PlanCloneCreativeAgenda();
        $creativeAngeda->area_plan_clone_id = $this->model->getKey();
        $creativeAngeda->save();
        foreach ($this->data['activiesPlanCreative'] as $creativeInfo){
            $creativityActivity = new PlanCloneActivitiesCreativeAgenda();
            $creativeAngeda->clone_agenda_id = $creativeAngeda->getKey();
            $creativityActivity->title = $creativeInfo['title'];
            $creativityActivity->description = $creativeInfo['description'];
            $creativityActivity->save();
        }
    }
}
