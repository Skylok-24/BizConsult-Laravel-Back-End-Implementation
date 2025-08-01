<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTestmonialRequest extends FormRequest
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
            'name' => 'required|string',
            'position' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable|mimes:jpg,png'
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => __('keywords.name'),
            'position' => __('keywords.position'),
            'description' => __('keywords.description'),
            'description' => __('keywords.description'),
        ];
    }
}
