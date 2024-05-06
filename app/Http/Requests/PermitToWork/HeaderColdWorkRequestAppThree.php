<?php

namespace App\Http\Requests\PermitToWork;

use Illuminate\Foundation\Http\FormRequest;

class HeaderColdWorkRequestAppThree extends FormRequest
{
    public function rules()
    {
        return [
            'id' => 'required',
            'closed_out_pa' => 'required|integer',
            'work_status_pa' => 'required',
            'work_description_pa' => 'nullable',
            'work_status_aa' => 'required',
            'closed_out_aa' => 'required|integer',
        ];
    }
    function attributes()
    {
        return [
            'work_status_pa' => 'Work Status PA',
            'work_status_aa' => 'Work Status AA',
            'closed_out_pa' => 'Close out PA Approval',
            'closed_out_aa' => 'Close Out AA Approval',
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
