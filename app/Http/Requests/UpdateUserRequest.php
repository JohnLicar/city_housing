<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'first_name' => ['bail', 'required', 'max:120'],
            'middle_name' => ['bail', 'nullable', 'max:120'],
            'last_name' => ['bail', 'required', 'max:120'],
            'gender' => ['bail', 'required'],
            'contact' => ['bail', 'required', 'min:11'],
            'address' => ['bail', 'required', 'min:10'],
            'email' => ['bail', 'required'],

        ];
    }
}
