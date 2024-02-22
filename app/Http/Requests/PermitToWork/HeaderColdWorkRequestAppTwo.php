<?php

namespace App\Http\Requests\PermitToWork;

use Illuminate\Foundation\Http\FormRequest;

class HeaderColdWorkRequestAppTwo extends FormRequest
{
    public function rules()
    {
        return [
            'id' => 'required',
            'issue' => 'required|integer',
            'acceptance' => 'required|integer',
        ];
    }
    function attributes()
    {
        return [
            'issue' => 'Issue AA',
            'acceptance' => 'Acceptance PA',
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
