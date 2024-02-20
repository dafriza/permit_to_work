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
            'id' => 'nullable',
            'number' => 'required',
            'work_order' => 'required|integer',
            'date_application' => 'required|date',
            'request_pa' => 'required|integer',
            'direct_spv' => 'required|integer',
            'equipment_id' => 'required|string',
            // 'tag_number' => 'required|string',
            'location' => 'required|string',
            'task_description' => 'required|string',
            'tools_equipment' => 'required|array',
            'trades' => 'required|array',
            'personel_involved' => 'required|integer',
            'sign_pa' => 'required',

            // 'permitDesc' => 'required|string',
            // 'isolationDesc' => 'required|string',
            // 'procedureDesc' => 'required|string',
        ];
    }

    function attributes()
    {
        return [
            'date_application' => 'tanggal',
            'direct_spv' => 'supervisor',
            'location' => 'lokasi',
            'trades' => 'keahlian/trades',
            'sign_pa' => 'tanda tangan',
            // 'permitDesc' => 'Permit description',
            // 'isolationDesc' => 'Isolation Description',
            // 'procedureDesc' => 'Procedure Description',

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
            'sign_pa' => $this->signConverter(),
            'equipment_id' => $this->equipment_id . '/' . $this->tag_number,
        ]);
    }
    function signConverter()
    {
        return SignServices::signConverter(null, $this->sign_pa, $this->work_order, $this->date_application, 'signature_employee');
    }
}
