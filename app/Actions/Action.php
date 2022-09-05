<?php

namespace App\Actions;

use Illuminate\Database\Eloquent\Model;

abstract class Action
{
    protected ?Model $model = null;
    protected array $data;

    abstract public function execute(): self;

    public function getModel(): ?Model
    {
        return $this->model;
    }

    public function setModel(Model $model): static
    {
        $this->model = $model;
        return $this;
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function setData(array $data): static
    {
        $this->data = $data;

        return $this;
    }
}
