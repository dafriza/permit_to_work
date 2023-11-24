<?php

namespace App\Http\Requests\PermitToWork;

use Illuminate\Foundation\Http\FormRequest;

class HeaderColdWorkRequest extends FormRequest
{
    public function rules()
    {
        return [
            'date_application' => 'required|date',
            'request_pa' => 'required|integer',
            'direct_spv' => 'required|integer',
            'equipment_id' => 'required|string',
            'location' => 'required|string',
            'task_description' => 'required|string',
            'tools_equipment' => 'required|array',
            'trades' => 'required|array',
            'personel_involved' => 'required|integer',
        ];
    }

    function attributes()
    {
        return [
            'date_application' => 'tanggal',
            'direct_spv' => 'supervisor',
            'location' => 'lokasi',
            'trades' => 'keahlian/trades',
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
