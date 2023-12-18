<?php

namespace App\Http\Requests\PermitToWork;

use Illuminate\Foundation\Http\FormRequest;

class HeaderColdWorkRequestCrc extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // public function authorize()
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'permitDesc' => 'required|string',
            'isolationDesc' => 'required|string',
            'procedureDesc' => 'required|string'
        ];
    }
    function attributes()
    {
        return [
            'permitDesc' => 'Permit description',
            'isolationDesc' => 'Isolation Description',
            'procedureDesc' => 'Procedure Description'
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
