<?php

namespace App\Http\Requests\UserManagement;

use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Http\FormRequest;

class PasswordManagementRequest extends FormRequest
{
    public function rules()
    {
        return [
            'id' => 'required',
            // 'passwordDummy' => 'required|min:6',
            'password' => 'required|min:6|same:passwordDummy',
        ];
    }
    function messages()
    {
        return [
            'requires' => ':attribute tidak boleh kosong',
            'min' => ':attribute minimal :min karakter',
            'same' => 'password tidak cocok'
        ];
    }
}
