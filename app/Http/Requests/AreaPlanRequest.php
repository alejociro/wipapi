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
            'name' => 'required',
            'week' => 'required',
            'user_id' => 'required',
            'area_id' => 'required',
            'question' => 'required|string',
            'competences' => 'required|string',
            'orientations' => 'required',
            'adaptations' => 'required|string',
            'performance_indicators' => 'required',
            'performance_indicators.*' => 'required|integer|exists:indicators,id' ,
            'tasks' => 'required',
            'tasks.*' => 'required',
            'tasks.*.title' => 'required|string',
            'tasks.*.description' => 'required|string',
            'tasks.*area_plan_id' => 'required',
            'activities' => 'required',
            'activities.*' => 'required',
            'activities.*.title' => 'required|string',
            'activities.*.description' => 'required|string',
            'activities.*area_plan_id' => 'required',
            'annexes' => 'required',
            'annexes.*' => 'required',
            'annexes.*.title' => 'required|string',
            'annexes.*.type' => 'required|string',
            'annexes.*.value' => 'required|string',
            'annexes.*area_plan_id' => 'required',
            'references' => 'required',
            'references.*' => 'required',
            'references.*.title' => 'required|string',
            'references.*.value' => 'required|string',
            'references.*.author' => 'required|string',
            'references.*area_plan_id' => 'required',
            'activiesPlanCreative' => 'required',
            'recommendations' => 'required',
            'recommendations.*' => 'required',
            'recommendations.*.title' => 'required|string',
            'recommendations.*.description' => 'required|string',
            'recommendations.*area_plan_id' => 'required'
        ];
    }
}
