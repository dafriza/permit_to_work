<?php

namespace App\Http\Requests\UserProfile;

use Illuminate\Foundation\Http\FormRequest;

class UserProfileRequest extends FormRequest
{
    public function rules()
    {
        return [
            'id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'role' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
        ];
    }
    function attributes()
    {
        return [
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
