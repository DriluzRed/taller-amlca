<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSpecialtyRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
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
            'name.required' => 'El nombre de la especialidad es requerido.',
            'name.string' => 'El nombre de la especialidad debe ser un texto.',
            'name.max' => 'El nombre de la especialidad no debe exceder los 255 caracteres.',
            'description.string' => 'La descripción de la especialidad debe ser un texto.',
            'description.max' => 'La descripción de la especialidad no debe exceder los 255 caracteres.',
        ];
    }
}
