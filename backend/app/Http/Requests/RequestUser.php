<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestUser extends FormRequest
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
    public function messages()
    {
        return [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'email.unique' => 'Email is alredy taken',
            'gender_id.required' => 'Select a gender',
            'age.required' => 'required|number',
            'age.required' => 'Age is required',
            'age.number' => 'Age must be a valid date',
            'info.required' => 'Info is required',
            'birthday.required' => 'Birthday is required'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|unique:users',
            'gender_id' => 'required',
            'age' => 'required',
            'married' => 'required',
            'info' => 'required',
            'birthday' => 'required'
        ];
    }
}
