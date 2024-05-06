<?php

namespace App\Http\Requests\PermitToWork;

use Illuminate\Foundation\Http\FormRequest;

class StorePTWProgressRequest extends FormRequest
{
    public function rules()
    {
        return [
            // tra
            'id' => 'required',
            'tra_level' => 'required',
            'reference_no' => 'required',
            'hazard' => 'nullable',
            'controls' => 'nullable',
            'sscr' => 'nullable',
            // crc
            'cross_referenced_certificates' => 'required',
            // approval
            'approver_authorisation' => 'required|integer',
            'designation' => 'required|string',
            'approver_permit_registry' => 'required|integer',
            'approver_site_gas_test' => 'required|integer',
            'flammable' => 'required',
            'h2s' => 'required',
            'oxygen' => 'required',
            'issue' => 'required|integer',
            'acceptance' => 'required|integer',
            'closed_out_pa' => 'required|integer',
            'work_status_pa' => 'required',
            'work_description_pa' => 'nullable',
            'work_status_aa' => 'required',
            'closed_out_aa' => 'required|integer',
            'regis_work_pa' => 'required|integer',
        ];
    }
    function prepareForValidation()
    {
        $this->merge([
            // tra
            'hazard' => ['hazard' => $this->hazard, 'hazard_other' => $this->hazards],
            'controls' => [
                'controls' => [$this->b1, $this->b2, $this->b3, $this->b4, $this->b5, $this->b6, $this->b7, $this->b8, $this->b9, $this->b10, $this->b11, $this->b12, $this->b13, $this->b14, $this->b15, $this->b16, $this->b17, $this->b18, $this->b19, $this->b20, $this->b21, $this->b22, $this->b23, $this->b24, $this->b25, $this->b26, $this->b27, $this->b28, $this->b29, $this->b30],
                'control_other' => $this->controls_other,
                'additional_ppe' => $this->additional_ppe,
            ],
            'tra_level' => $this->tra_level[0],
            // crc
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
            // crc
            'permit_description' => 'Permit description',
            'isolation_description' => 'Isolation Description',
            'procedure_description' => 'Procedure Description',
            // approval
            'approver_authorisation' => 'Authorization SC',
            'designation' => 'Designation',
            'approver_permit_registry' => 'Registry PC',
            'approver_site_gas_test' => 'Approve Procedures Name',
            'flammable' => 'Flammable',
            'h2s' => 'H2S',
            'oxygen' => 'Oxygen',
            'issue' => 'Issue AA',
            'acceptance' => 'Acceptance PA',
            'work_status_pa' => 'Work Status PA',
            'work_status_aa' => 'Work Status AA',
            'closed_out_pa' => 'Close out PA Approval',
            'closed_out_aa' => 'Close Out AA Approval',
            'regis_work_pa' => 'Registery Of Work Completion PA',
        ];
    }
    function messages()
    {
        return [
            'required' => ':attribute tidak boleh kosong!',
            'integer' => ':attribute harus berupa angka! ',
        ];
    }
}
