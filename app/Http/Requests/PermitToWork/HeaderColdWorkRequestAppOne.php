<?php

namespace App\Http\Requests\PermitToWork;

use Illuminate\Foundation\Http\FormRequest;

class HeaderColdWorkRequestAppOne extends FormRequest
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
            'approver_name_sc' => 'required|integer',
            'designation' => 'required|string',
            'approver_name_pc' => 'required|integer',
            'approver_name_procedures' => 'required|integer',
            'flammable' => 'required|integer',
            'h2s' => 'required|integer',
            'oxygen' => 'required|integer',
        ];
    }
    function attributes()
    {
        return [
            'approver_name_sc' => 'Authorization SC',
            'designation' => 'Designation',
            'approver_name_pc' => 'Registry PC',
            'approver_name_procedures' => 'Approve Procedures Name',
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
