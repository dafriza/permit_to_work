<?php

namespace App\Http\Requests\UserManagement;

use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Http\FormRequest;

class UserManagementRequest extends FormRequest
{
    public function rules()
    {
        return [
            'id' => 'integer',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'permission' => 'required',
            'role_assignment' => 'required'
        ];
    }
    function prepareForValidation()
    {
        $this->merge([
            'password' => Hash::make($this->password)
        ]);
    }
    function attributes()
    {
        return [
            'first_name' => 'nama depan',
            'last_name' => 'nama belakang',
            'address' => 'alamat',
            'phone_number' => 'nomor telepon',
        ];
    }
    function messages()
    {
        return [
            'required' => ':attribute tidak boleh kosong!',
        ];
    }
}
