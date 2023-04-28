<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'string',
            'email' => 'email|string',
            'password' => 'string',
            'group_id' => 'exists:groups,id'
        ];
    }
}
