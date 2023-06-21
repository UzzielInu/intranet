<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdministrativeUnitRequest extends FormRequest
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
            'local_id' => 'required',
            'name' => 'required',
            'mnemonic' => 'required',
            'type' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'local_id.required' => 'El campo local_id es requerido.',
            'name.required' => 'El campo Name es requerido.',
            'mnemonic.required' => 'El campo Mnemonic es requerido.',
            'type.required' => 'El campo Type es requerido.',
            'type.string' => 'El campo Type debe contener al menos un dato.',
        ];
    }
}
