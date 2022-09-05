<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AreaPlanCloneRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'area_plan_id' => 'required',
            'user_id' => 'required',
            'group_id' => 'required'
        ];
    }
}
