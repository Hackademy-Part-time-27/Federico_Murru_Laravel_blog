<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
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
            'title' => 'required|max:150',
            'description' => 'required|max:255',
        ];
    }
    public function messages(): array
    {
        return [
            'title.required' => 'Title field is mandatory.',
            'title.max' => 'The Title field may not be longer than :max characters.',
        ];
    }
}
