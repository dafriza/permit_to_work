<?php

namespace App\Http\Requests\PermitToWork;

use Illuminate\Foundation\Http\FormRequest;

class HeaderColdWorkRequestCrc extends FormRequest
{
    public function rules()
    {
        return [
            'id' => 'required',
            'cross_referenced_certificates' => 'required'
            // 'permit_description' => 'required',
            // 'isolation_description' => 'required',
            // 'procedure_description' => 'required',
        ];
    }
    function prepareForValidation()
    {
        return $this->merge([
            'cross_referenced_certificates' => [
                'permit_description' => $this->permit_description,
                'isolation_description' => $this->isolation_description,
                'procedure_description' => $this->procedure_description,
            ],
        ]);
    }
    function attributes()
    {
        return [
            'permit_description' => 'Permit description',
            'isolation_description' => 'Isolation Description',
            'procedure_description' => 'Procedure Description',
        ];
    }
    function messages()
    {
        return [
            'required' => ':attribute tidak boleh kosong!',
        ];
    }
}
