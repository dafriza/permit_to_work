<?php

namespace App\Http\Requests\PermitToWork;

use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Http\FormRequest;

class HeaderColdWorkRequest extends FormRequest
{
    public function rules()
    {
        return [
            'number' => 'required',
            'work_order' => 'required',
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
            'signature' => 'tanda tangan',
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
            'signature' => $this->signConverter(),
            'equipment_id' => $this->equipment_id . '/' . $this->tag_number,
        ]);
    }
    function signConverter()
    {
        try {
            $image_parts = explode(';base64,', $this->signature);
            $image_type_aux = explode('image/', $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $file = $this->date_application . '-' . '1' . '-' . 'John Doe.' . $image_type;
            Storage::disk('signature')->put($file, $image_base64);
            return $file;
        } catch (\Exception $e) {
            return $e;
        }
    }
}
