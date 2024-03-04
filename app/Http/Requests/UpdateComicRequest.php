<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
            'title'             => 'required|max:1024|url',
            'description'       => 'nullable|max:1024',
            'thumb'             => 'nullable|max:1024|url',
            'price'             => 'required|numeric|min:1|max:20',
            'seiries'           => 'required|max:255',
            'sale_date'         => 'nullable|numeric|min:100|max:5000',
            'type'              => 'nullable|max:16',
        ];
    }
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'title.required' => 'MESSAGGIO CUSTOM TITLE REQUIRED',
            'title.max' => 'MESSAGGIO CUSTOM TITLE MAX',
        ];
    }
}
