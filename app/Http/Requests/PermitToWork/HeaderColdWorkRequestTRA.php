<?php

namespace App\Http\Requests\PermitToWork;

use Illuminate\Foundation\Http\FormRequest;

class HeaderColdWorkRequestTRA extends FormRequest
{
    public function rules()
    {
        return [
            'id' => 'required',
            'tra_level' => 'required',
            'reference_no' => 'required',
            'hazard' => 'nullable',
            'controls' => 'nullable',
            // 'hazards' => 'nullable',
            // 'b1' => 'nullable',
            // 'b2' => 'nullable',
            // 'b3' => 'nullable',
            // 'b4' => 'nullable',
            // 'b5' => 'nullable',
            // 'b6' => 'nullable',
            // 'b7' => 'nullable',
            // 'b8' => 'nullable',
            // 'b9' => 'nullable',
            // 'b10' => 'nullable',
            // 'b11' => 'nullable',
            // 'b12' => 'nullable',
            // 'b13' => 'nullable',
            // 'b14' => 'nullable',
            // 'b15' => 'nullable',
            // 'b16' => 'nullable',
            // 'b17' => 'nullable',
            // 'b18' => 'nullable',
            // 'b19' => 'nullable',
            // 'b20' => 'nullable',
            // 'b21' => 'nullable',
            // 'b22' => 'nullable',
            // 'b23' => 'nullable',
            // 'b24' => 'nullable',
            // 'b25' => 'nullable',
            // 'b26' => 'nullable',
            // 'b27' => 'nullable',
            // 'b28' => 'nullable',
            // 'b29' => 'nullable',
            // 'b30' => 'nullable',
            // 'controls_other' => 'nullable',
            // 'additional_ppe' => 'nullable',
            'sscr' => 'nullable',
        ];
    }
    function prepareForValidation()
    {
        $this->merge([
            'hazard' => ['hazard' => $this->hazard, 'hazard_other' => $this->hazards],
            'controls' => [
                'controls' => [$this->b1, $this->b2, $this->b3, $this->b4, $this->b5, $this->b6, $this->b7, $this->b8, $this->b9, $this->b10, $this->b11, $this->b12, $this->b13, $this->b14, $this->b15, $this->b16, $this->b17, $this->b18, $this->b19, $this->b20, $this->b21, $this->b22, $this->b23, $this->b24, $this->b25, $this->b26, $this->b27, $this->b28, $this->b29, $this->b30],
                'control_other' => $this->controls_other,
                'additional_ppe' => $this->additional_ppe,
            ],
            'tra_level' => $this->tra_level[0]
        ]);
    }
}
