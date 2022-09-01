<?php

namespace App\Actions;

use App\Models\ActivitiesAreaPlan;
use App\Models\AnnexesAreaPlan;
use App\Models\AreaPlan;
use App\Models\PlanCompetence;
use App\Models\PlanCreativeAgenda;
use App\Models\PlanIndicator;
use App\Models\RecommendationsAreaPlan;
use App\Models\ReferencesAreaPlan;
use App\Models\TasksAreaPlan;

class AreaPlanAction extends Action
{
    public function execute(): self
    {
        $this->setModel(new AreaPlan());
        $this->model->name = $this->data['name'];
        $this->model->week = $this->data['week'];
        $this->model->user_id = $this->data['user_id'];
        $this->model->area_id = $this->data['area_id'];
        $this->model->question = $this->data['question'];
        $this->model->competences = $this->data['competences'];
        $this->model->orientations = json_encode($this->data['orientations'], true);
        $this->model->adaptations = json_encode($this->data['adaptations'], true);
        $this->model->save();

        $this->indicators();
        $this->competences();
        $this->tasks();
        $this->activities();
        $this->annexes();
        $this->references();
        $this->recommendations();
        $this->creativeAgenda();

        return $this;
    }

    public function indicators(): void
    {
        foreach ($this->data['performance_indicators'] as $parentId) {
            $indicator = new PlanIndicator();
            $indicator->area_plan_id = $this->model->getKey();
            $indicator->indicator_id = $parentId;
            $indicator->save();
        }
    }

    public function competences(): void
    {
        foreach ($this->data['performance_competences'] as $parentId) {
            $competence = new PlanCompetence();
            $competence->area_plan_id = $this->model->getKey();
            $competence->competence_id = $parentId;
            $competence->save();
        }
    }

    public function tasks(): void
    {
        foreach ($this->data['tasks'] as $taskInfo) {
            $task = new TasksAreaPlan();
            $task->area_plan_id = $this->model->getKey();
            $task->title = $taskInfo['title'];
            $task->description = $taskInfo['description'];
            $task->save();
        }
    }

    public function activities(): void
    {
        foreach ($this->data['activities'] as $activityInfo){
          $activity = new ActivitiesAreaPlan();
          $activity->title = $activityInfo['title'];
          $activity->description = $activityInfo['description'];
          $activity->area_plan_id = $this->model->getKey();
          $activity->save();
        };
    }

    public function annexes(): void
    {
        foreach ($this->data['annexes'] as $annexInfo){
            $annex = new AnnexesAreaPlan();
            $annex->title = $annexInfo['title'];
            $annex->type = $annexInfo['type'];
            $annex->value = $annexInfo['value'];
            $annex->area_plan_id = $this->model->getKey();
            $annex->save();
        };
    }

    public function references(): void
    {
        foreach ($this->data['references'] as $referenceInfo){
          $reference = new ReferencesAreaPlan();
          $reference->title = $referenceInfo['title'];
          $reference->value = $referenceInfo['value'];
          $reference->author = $referenceInfo['author'];
          $reference->area_plan_id = $this->model->getKey();
          $reference->save();
        }
    }

    public function recommendations(): void
    {
        foreach ($this->data['recommendations'] as $recommendationInfo){
            $recommendation = new RecommendationsAreaPlan();
            $recommendation->title = $recommendationInfo['title'];
            $recommendation->description = $recommendationInfo['description'];
            $recommendation->area_plan_id = $this->model->getKey();
            $recommendation->save();
        }
    }

    public function creativeAgenda(): void
    {
        $creativeAngeda = new PlanCreativeAgenda();
        $creativeAngeda->area_plan_id = $this->model->getKey();
        $creativeAngeda->save();
        foreach ($this->data['activiesPlanCreative'] as $creativeInfo){
            $creativityActivity = new ActivitiesAreaPlan();
            $creativeAngeda->plan_creative_agenda_id = $creativeAngeda->getKey();
            $creativityActivity->title = $creativeInfo['title'];
            $creativityActivity->description = $creativeInfo['description'];
            $creativityActivity->save();
        }
    }
}
