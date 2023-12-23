<?php

namespace App\Http\Requests\PermitToWork;

use Illuminate\Foundation\Http\FormRequest;

class HeaderColdWorkRequestAppThree extends FormRequest
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
            'closed_out_pa' => 'required|integer',
            'closed_out_aa' => 'required|integer',
        ];
    }
    function attributes()
    {
        return [
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