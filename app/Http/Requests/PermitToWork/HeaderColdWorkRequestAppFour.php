<?php

namespace App\Http\Requests\PermitToWork;

use Illuminate\Foundation\Http\FormRequest;

class HeaderColdWorkRequestAppFour extends FormRequest
{
    public function rules()
    {
        return [
            'id' => 'required',
            'regis_work_pa' => 'required|integer',
        ];
    }
    function attributes()
    {
        return [
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
