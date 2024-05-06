<?php

namespace App\Http\Requests\PermitToWork;

use App\Services\Static\SignServices;
use Illuminate\Foundation\Http\FormRequest;

class SignedRequest extends FormRequest
{
    public function rules()
    {
        return [
            'id' => 'required',
            'sign_spv' => 'required'
        ];
    }
    function message()
    {
        return [
            'required' => ':attribute tidak boleh kosong!'
        ];
    }
    // protected function prepareForValidation()
    // {
    //     $this->merge([
    //         'sign_spv' => $this->signConverter(),
    //     ]);
    // }
    // function signConverter()
    // {
    //     return SignServices::signConverter($this->id, $this->signature, $this->work_order, $this->date_application, 'signature_approver');
    // }
}
