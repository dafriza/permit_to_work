<?php

namespace App\Http\Requests\PermitToWork;

use App\Services\Static\SignServices;
use Illuminate\Foundation\Http\FormRequest;

class ApprovalRequest extends FormRequest
{
    public function rules()
    {
        return [
            'id' => 'required|integer',
            'status' => 'required',
            'comment' => 'required',
            'signature' => 'required',
        ];
    }
    function messages()
    {
        return [
            'required' => ':attribute tidak boleh kosong!',
        ];
    }
    protected function prepareForValidation()
    {
        $this->merge([
            'signature' => $this->signConverter(),
        ]);
    }
    function signConverter()
    {
        return SignServices::signConverter($this->id, $this->signature, $this->work_order, $this->date_application, 'signature_approver');
    }
}
