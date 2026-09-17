<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class IdeaRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'description' => ['required' , 'min:8', 'max:255']
        ];
    }
    public function messages()
    {
        return [
            'description.required' => 'Description is required',
            'description.min' => 'Description must be at least 8 characters',
            'description.max' => 'Description must be no more than 255 characters'
        ];
    }
}
