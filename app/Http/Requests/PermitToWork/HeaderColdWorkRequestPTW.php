<?php

namespace App\Http\Requests\PermitToWork;

use Illuminate\Foundation\Http\FormRequest;

class HeaderColdWorkRequestPTW extends FormRequest
{
    public function rules()
    {
        return [
            'id' => 'required'
        ];
    }
}
