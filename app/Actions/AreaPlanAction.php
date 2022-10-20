<?php

namespace App\Actions;

use App\Models\ActiviesCreativeAgenda;
use App\Models\ActivitiesAreaPlan;
use App\Models\AnnexesAreaPlan;
use App\Models\AreaPlan;
use App\Models\PlanCompetence;
use App\Models\PlanCreativeAgenda;
use App\Models\PlanIndicator;
use App\Models\ReferencesAreaPlan;
use App\Models\TasksAreaPlan;
use App\Models\TopicsAreaPlan;

class AreaPlanAction extends Action
{
    public function execute(): self
    {
        $this->setModel(new AreaPlan());
        $this->model->name = $this->data['name'];
        $this->model->week = $this->data['week'];
        $this->model->user_id = auth()->id();
        $this->model->area_id = $this->data['area_id'];
        $this->model->question = $this->data['question'];
        $this->model->initial_date = $this->data['initial_date'];
        $this->model->end_date = $this->data['end_date'];
        $this->model->orientations = json_encode($this->transformRecomendations($this->data['orientations']), true);
        $this->model->adaptations = json_encode($this->transformRecomendations($this->data['adaptations']), true);
        $this->model->save();

        $this->indicators();
        $this->competences();
        $this->tasks();
        $this->activities();
        $this->annexes();
        $this->references();
        $this->creativeAgenda();
        $this->topics();

        return $this;
    }

    public function indicators(): void
    {
        foreach ($this->data['performance_indicators'] as $indicatorKey) {
            $indicator = new PlanIndicator();
            $indicator->area_plan_id = $this->model->getKey();
            $indicator->indicator_id = $indicatorKey['key'];
            $indicator->save();
        }
    }

    public function competences(): void
    {
        foreach ($this->data['performance_competences'] as $keyCompetence) {
            $competence = new PlanCompetence();
            $competence->area_plan_id = $this->model->getKey();
            $competence->competence_id = $keyCompetence['key'];
            $competence->save();
        }
    }

    public function tasks(): void
    {
        foreach ($this->data['tasks'] as $taskInfo) {
            $task = new TasksAreaPlan();
            $task->area_plan_id = $this->model->getKey();
            $task->title = $taskInfo['title'];
            $task->description = $taskInfo['value'];
            $task->save();
        }
    }

    public function activities(): void
    {
        foreach ($this->data['activities'] as $activityInfo){
          $activity = new ActivitiesAreaPlan();
          $activity->title = $activityInfo['name'];
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

    public function creativeAgenda(): void
    {
        $creativeAngeda = new PlanCreativeAgenda();
        $creativeAngeda->area_plan_id = $this->model->getKey();
        $creativeAngeda->save();
        foreach ($this->data['activiesPlanCreative'] as $creativeInfo){
            $creativityActivity = new ActiviesCreativeAgenda();
            $creativityActivity->plan_creative_agenda_id = $creativeAngeda->getKey();
            $creativityActivity->title = $creativeInfo['title'];
            $creativityActivity->description = $creativeInfo['value'];
            $creativityActivity->save();
        }
    }

    public function topics(): void
    {
        foreach ($this->data['performance_topics'] as $topicInfo) {
            $topic = new TopicsAreaPlan();
            $topic->area_plan_id = $this->model->getKey();
            $topic->topic_id = $topicInfo['key'];
            $topic->save();
        }
    }

    protected function transformRecomendations(array $orientations): array
    {
        return array_map(fn ($item) => $item['label'], $orientations);
    }
}
