<?php

namespace App\Http\Requests\PermitToWork;

use App\Services\Static\SignServices;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Http\FormRequest;

class HeaderColdWorkRequest extends FormRequest
{
    public function rules()
    {
        return [
            'number' => 'required',
            'work_order' => 'required|integer',
            'date_application' => 'required|date',
            'request_pa' => 'required|integer',
            'direct_spv' => 'required|integer',
            'equipment_id' => 'required|string',
            'tag_number' => 'required|string',
            'location' => 'required|string',
            'task_description' => 'required|string',
            'tools_equipment' => 'required|array',
            'trades' => 'required|array',
            'personel_involved' => 'required|integer',
            'signature' => 'required',
        ];
    }

    function attributes()
    {
        return [
            'date_application' => 'tanggal',
            'direct_spv' => 'supervisor',
            'location' => 'lokasi',
            'trades' => 'keahlian/trades',
            'signature' => 'tanda tangan',
        ];
    }
    function messages()
    {
        return [
            'required' => ':attribute tidak boleh kosong!',
            'integer' => ':attribute harus berupa angka! ',
        ];
    }
    protected function prepareForValidation()
    {
        $this->merge([
            'signature' => $this->signConverter(),
            'equipment_id' => $this->equipment_id . '/' . $this->tag_number,
        ]);
    }
    function signConverter()
    {
        return SignServices::signConverter(null, $this->signature, $this->work_order, $this->date_application, 'signature_employee');
    }
}
