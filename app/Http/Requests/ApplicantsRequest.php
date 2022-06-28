<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplicantsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [

            'housing_project_id' => ['bail', 'required', 'max:120'],
            'first_name' => ['bail', 'required', 'max:120'],
            'middle_name' => ['bail', 'nullable', 'max:120'],
            'last_name' => ['bail', 'required', 'max:120'],
            'suffix' => ['bail', 'nullable', 'max:120'],
            'brgy_origin' => ['bail', 'required'],
            'birth_date' => ['bail', 'required'],
            'place_of_birth' => ['bail', 'required'],
            'citizenship' => ['bail', 'required'],
            'civil_status' => ['bail', 'required'],
            'office' => ['bail', 'required'],
            'tin_no' => ['bail', 'nullable', 'max:120'],
            'govt_id' => ['bail', 'nullable', 'max:120'],
            'income_per_month' => ['bail', 'required'],

            'spouse_first_name' => ['bail', 'required', 'max:120'],
            'spouse_middle_name' => ['bail', 'nullable', 'max:120'],
            'spouse_last_name' => ['bail', 'required', 'max:120'],
            'spouse_birth_date' => ['bail', 'required'],
            'spouse_place_of_birth' => ['bail', 'required'],

        ];
    }
}
