<?php

namespace App\Actions;

use App\Models\Competence;
use App\Models\Indicator;
use App\Models\Objetive;
use App\Models\ProblematicalQuestion;
use App\Models\Subject;
use App\Models\Topic;

class SubjectStoreAction extends Action
{

    public function execute(): Action
    {
        $this->setModel(new Subject());
        $this->model->name = $this->data['name'];
        $this->model->area_id = $this->data['area_id'];
        $this->model->save();

        $this->objetives();
        $this->competences();
        $this->indicators();
        $this->topics();

        return $this;
    }

    public function objetives(): void
    {
        foreach ($this->data['objetives'] as $objetiveKey) {
            $objetive = new Objetive();
            $objetive->subject_id = $this->model->getKey();
            $objetive->description = $objetiveKey['description'];
            $objetive->save();
        }
    }

    public function competences(): void
    {
        foreach ($this->data['competences'] as $competenceKey) {
            $competence = new Competence();
            $competence->subject_id = $this->model->getKey();
            $competence->description = $competenceKey['description'];
            $competence->save();
        }
    }

    public function indicators(): void
    {
        foreach ($this->data['indicators'] as $indicatorKey) {
            $indicator = new Indicator();
            $indicator->subject_id = $this->model->getKey();
            $indicator->description = $indicatorKey['description'];
            $indicator->type = $indicatorKey['type'];
            $indicator->save();
        }
    }

    public function topics(): void
    {
        foreach ($this->data['topics'] as $topicKey){
            $topic = new Topic();
            $topic->subject_id = $this->model->getKey();
            $topic->name = $topicKey['name'];
            $topic->save();
        };
    }
}
