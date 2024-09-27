<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMachineRequest extends FormRequest
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
            'hp' => 'required|numeric',
            'voltage' => 'required|numeric',
            'board_consumption' => 'required|numeric',
            'area' => 'nullable',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'El campo Nombre es requerido.',
            'hp.required' => 'El campo HP es requerido.',
            'hp.numeric' => 'El campo HP debe ser solo numérico.',
            'voltage.required' => 'El campo Voltaje es requerido.',
            'voltage.numeric' => 'El campo Voltaje debe ser solo numérico.',
            'board_consumption.required' => 'El campo Consumo de placa es requerido.',
            'board_consumption.numeric' => 'El campo Consumo de placa debe ser solo numérico.',
        ];
    }
}
