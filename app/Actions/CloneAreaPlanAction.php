<?php

namespace App\Actions;

use App\Models\ActiviesCreativeAgenda;
use App\Models\ActivitiesAreaPlan;
use App\Models\AnnexesAreaPlan;
use App\Models\AreaPlan;
use App\Models\AreaPlanClone;
use App\Models\PlanCloneActivitie;
use App\Models\PlanCloneActivitiesCreativeAgenda;
use App\Models\PlanCloneAnnexe;
use App\Models\PlanCloneCreativeAgenda;
use App\Models\PlanCloneReference;
use App\Models\PlanCloneTask;
use App\Models\PlanCreativeAgenda;
use App\Models\ReferencesAreaPlan;
use App\Models\TasksAreaPlan;

class CloneAreaPlanAction extends Action
{
    public function execute(): self
    {
        /** @var AreaPlan $planMain */
        $planMain = $this->data['area_plan'];
        $this->setModel(new AreaPlanClone());
        $this->model->question = $planMain->question;
        $this->model->orientations = $planMain->orientations;
        $this->model->adaptations = $planMain->adaptations;
        $this->model->user_clone = auth()->id();
        $this->model->group_id = auth()->user()->group_id;
        $this->model->area_plan_id = $planMain->getKey();
        $this->model->save();

        $this->tasks();
        $this->activities();
        $this->annexes();
        $this->references();
        $this->creativeAgenda();

        return $this;
    }

    public function tasks(): void
    {
        $tasks = $this->data['area_plan']->planTasks;
        foreach ($tasks as $task) {
            $taskClone = new PlanCloneTask();
            $taskClone->area_plan_clone_id = $this->model->getKey();
            $taskClone->title = $task->title;
            $taskClone->description = $task->description;
            $taskClone->save();
        }
    }

    public function activities(): void
    {
        $activities = $this->data['area_plan']->planActivities;
        foreach ($activities as $activity){
            $activityClone = new PlanCloneActivitie();
            $activityClone->title = $activity->title;
            $activityClone->description = $activity->description;
            $activityClone->area_plan_clone_id = $this->model->getKey();
            $activityClone->save();
        };
    }

    public function annexes(): void
    {
        $annexes = $this->data['area_plan']->planAnnexes;
        foreach ($annexes as $annex){
            $annexClone = new PlanCloneAnnexe();
            $annexClone->title = $annex->title;
            $annexClone->type = $annex->type;
            $annexClone->value = $annex->value;
            $annexClone->area_plan_clone_id = $this->model->getKey();
            $annexClone->save();
        };
    }

    public function references(): void
    {
        $references = $this->data['area_plan']->planReferences;
        foreach ($references as $reference){
            $referenceClone = new PlanCloneReference();
            $referenceClone->title = $reference->title;
            $referenceClone->value = $reference->value;
            $referenceClone->author = $reference->author;
            $referenceClone->area_plan_clone_id = $this->model->getKey();
            $referenceClone->save();
        }
    }

    public function creativeAgenda(): void
    {
        $creativeAgenda = new PlanCloneCreativeAgenda();
        $creativeAgenda->area_plan_clone_id = $this->model->getKey();
        $creativeAgenda->save();
        $agendaId = $this->data['area_plan']->planCreativeAgenda()->with('activities')->first();
        $activities = $agendaId->activities;
        foreach ($activities as $activity){
            $creativityActivity = new PlanCloneActivitiesCreativeAgenda();
            $creativityActivity->title = $activity['title'];
            $creativityActivity->description = $activity['description'];
            $creativityActivity->clone_agenda_id = $creativeAgenda->getKey();
            $creativityActivity->save();
        }
    }
}
