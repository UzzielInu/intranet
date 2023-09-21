<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreExpenseTypeRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'mnemonic' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'El campo Name es requerido.',
            'mnemonic.required' => 'El campo Mnemonic es requerido.',
        ];
    }
}
