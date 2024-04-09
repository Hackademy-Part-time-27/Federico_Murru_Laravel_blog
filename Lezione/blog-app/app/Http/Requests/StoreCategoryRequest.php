<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:50'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Il campo e obbligatorio',
            'name.max' => 'Il campo non puo essere piu lungo di 50 caratteri',
        ];
    }
}
