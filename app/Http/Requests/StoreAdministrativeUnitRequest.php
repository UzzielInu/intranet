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
            'local_id.required' => 'El campo Número es requerido.',
            'name.required' => 'El campo Nombre es requerido.',
            'mnemonic.required' => 'El campo Mnemonico es requerido.',
            'type.required' => 'El campo Tipo es requerido.',
            'type.string' => 'El campo Tipo debe contener al menos un dato.',
        ];
    }
}
