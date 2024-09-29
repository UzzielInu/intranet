<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReportRequest extends FormRequest
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
            'partner' => 'required',
            'date' => 'required',
            'activities' => 'required',
            'missing' => 'required',
            'status' => 'nullable',
            'signature_name' => 'nullable',
            'signature' => 'nullable',
            'arrival' => 'nullable',
            'exit' => 'nullable',
            'total_work' => 'nullable',
            'area_id' => 'nullable',
            //materials
            'item.*' => 'required',
            'quantity.*' => 'required',
            'description.*' => 'required',
            'location.*' => 'required',
            'origin.*' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'partner.required' => 'El campo Compañero es requerido.',
            'date.required' => 'El campo Fecha es requerido.',
            'activities.required' => 'El campo Actividades es requerido.',
            'missing.required' => 'El campo Faltantes es requerido.',
            'status.required' => 'El campo Estado es requerido.',
            'signature_name.required' => 'El campo Nombre de firma es requerido.',
            'signature.required' => 'El campo Firma es requerido.',
            'arrival.required' => 'El campo Llegada es requerido.',
            'exit.required' => 'El campo Salida es requerido.',
            'total_work.required' => 'El campo Tiempo de trabajo es requerido.',
        ];
    }
}
