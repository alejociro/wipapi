<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubjectRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'area_id' => 'required|integer|exists:areas,id',
            'objetives' => 'required',
            'objetives.*.description' => 'string',
            'competences' => 'required',
            'competences.*.description' => 'string',
            'indicators' => 'required',
            'indicators.*.type' => 'required|string',
            'indicators.*.description' => 'required|string',
            'topics' => 'required',
            'topics.*.name' => 'required|string',
        ];
    }
}
