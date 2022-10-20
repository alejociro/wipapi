<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AreaPlanRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'week' => 'required|string',
            'question' => 'required|string',
            'end_date' => 'required',
            'initial_date' => 'required',
            'performance_competences' => 'required',
            'performance_competences.*.key' => 'required|integer|exists:indicators,id' ,
            'orientations' => 'required',
            'orientations.*' => 'sometimes',
            'orientations.*.label' => 'string',
            'adaptations' => 'required',
            'adaptations.*' => 'sometimes',
            'adaptations.*.label' => 'string',
            'performance_indicators' => 'required',
            'performance_indicators.*.key' => 'required|integer|exists:indicators,id' ,
            'tasks' => 'required',
            'tasks.*' => 'required',
            'tasks.*.value' => 'required|string',
            'tasks.*.title' => 'required|string',
            'activities' => 'required',
            'activities.*' => 'required',
            'activities.*.name' => 'required|string',
            'activities.*.description' => 'required|string',
            'annexes' => 'required',
            'annexes.*' => 'required',
            'annexes.*.title' => 'required|string',
            'annexes.*.type' => 'required|string',
            'annexes.*.value' => 'required|string',
            'references' => 'required',
            'references.*' => 'required',
            'references.*.title' => 'required|string',
            'references.*.value' => 'required|string',
            'references.*.author' => 'required|string',
            'activiesPlanCreative' => 'required',
            'activiesPlanCreative.*' => 'required',
            'activiesPlanCreative.*.title' => 'required',
            'activiesPlanCreative.*.value' => 'required',
            'performance_topics' => 'required',
            'performance_topics.*' => 'required',
            'performance_topics.*.key' => 'required',
        ];
    }
}
