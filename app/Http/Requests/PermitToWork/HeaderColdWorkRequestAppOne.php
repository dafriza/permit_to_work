<?php

namespace App\Http\Requests\PermitToWork;

use Illuminate\Foundation\Http\FormRequest;

class HeaderColdWorkRequestAppOne extends FormRequest
{
    public function rules()
    {
        return [
            'id' => 'required',
            'approver_authorisation' => 'required|integer',
            'designation' => 'required|string',
            'approver_permit_registry' => 'required|integer',
            'approver_site_gas_test' => 'required|integer',
            'flammable' => 'required',
            'h2s' => 'required',
            'oxygen' => 'required',
        ];
    }
    function attributes()
    {
        return [
            'approver_authorisation' => 'Authorization SC',
            'designation' => 'Designation',
            'approver_permit_registry' => 'Registry PC',
            'approver_site_gas_test' => 'Approve Procedures Name',
            'flammable' => 'Flammable',
            'h2s' => 'H2S',
            'oxygen' => 'Oxygen',
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
