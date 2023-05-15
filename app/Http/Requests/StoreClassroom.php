<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClassroom extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            // // second solution validation
            'List_Classes.*.Name' => 'required',
            'List_Classes.*.Name_class_en' => 'required',
        ];
    }
    public function messages()
    {
        return [
            // 'Name.required' => trans('validation.required'),
            // 'Name.unique' => trans('validation.unique'),
            // 'Name_en.required' => trans('validation.required'),
            // 'Name_en.unique' => trans('validation.unique'),

            // second solution validation
            'Name.required' => trans('validation.required'),
            'Name_class_en.required' => trans('validation.required'),

        ];
    }
}
