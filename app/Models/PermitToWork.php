<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PermitToWork extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];
    protected $casts = [
        'tools_equipment' => 'array',
        'trades' => 'array',
        'hazard' => 'object',
        'controls' => 'object',
        'sscr' => 'object',
        'cross_referenced_certificates' => 'object',
        'authorisation' => 'object',
        'permit_registry' => 'object',
        'site_gas_test' => 'object',
        'issue' => 'object',
        'acceptance' => 'object',
        'close_out_pa' => 'object',
        'close_out_aa' => 'object',
        'registry_of_work_completion' => 'object',
        'created_at' => 'date:Y-m-d',
        // 'submission' => 'object',
        // 'authorization_and_issuing' => 'object',
        // 'completion' => 'object',
    ];
    private const status_issue = [
        'failure' => 'danger,error,x,Rejected',
        'draft' => 'secondary,warning,info-circle,Draft',
        'success' => 'success,success,check,Success',
    ];
    private const status_desc = [
        1 => 'ON GOING',
        2 => 'SUCCESS',
        3 => 'REJECTED',
        4 => 'DRAFT',
    ];
    public function request_pa()
    {
        return $this->belongsTo(User::class, 'request_pa', 'id');
    }
    public function direct_spv_relation()
    {
        return $this->belongsTo(User::class, 'direct_spv', 'id');
    }
    function statusIssue(): Attribute
    {
        return Attribute::make(set: fn($value) => self::status_issue[$value], get: fn($value) => $value);
    }
    function statusName(): Attribute
    {
        return Attribute::make(set: fn($value) => self::status_desc[$this->status], get: fn($value) => $value);
    }
    function dateConvert(): Attribute
    {
        return Attribute::make(
            set: fn($value) => date_format(date_create($value), 'Y-m-d'),
            get: function ($value) {
                $dateNow = now();
                $datePTW = $value;
                $resultDate = $dateNow->diffInDays($datePTW) . ' hari';
                $realDate = $dateNow->diffInDays($datePTW);
                if ($realDate > 7) {
                    $minggu = floor($realDate / 7);
                    $hari = $realDate % 7;
                    $resultDate = $minggu . ' minggu ' . $hari . ' hari';
                    if ($realDate > 30) {
                        $bulan = floor($realDate / 30);
                        $minggu = $bulan > 7 ? floor($bulan / 7) : 0;
                        $hari = $minggu < 7 ? $minggu : $bulan % 7;
                        $resultDate = $bulan . ' bulan ' . $minggu . ' minggu ' . $hari . ' hari';
                    }
                }
                return $resultDate;
            },
        );
    }
    function dateDetailRequest(): Attribute
    {
        return Attribute::make(
            get: function () {
                return date_format(date_create($this->date), 'd/m/Y');
            },
        );
    }
    function getPAName(): Attribute
    {
        return Attribute::make(
            get: function () {
                return $this->getFullNameUserById($this->request_pa);
            },
        );
    }
    function getSPVName(): Attribute
    {
        return Attribute::make(
            get: function () {
                return $this->getFullNameUserById($this->direct_spv);
            },
        );
    }
    function getAuthorisationName(): Attribute
    {
        return Attribute::make(
            get: function () {
                return $this->getFullNameUserById($this->authorisation->approver);
            },
        );
    }
    function getPermitRegistryName(): Attribute
    {
        return Attribute::make(
            get: function () {
                return $this->getFullNameUserById($this->permit_registry->approver);
            },
        );
    }
    function getSiteGasTestName(): Attribute
    {
        return Attribute::make(
            get: function () {
                return $this->getFullNameUserById($this->site_gas_test->approver);
            },
        );
    }
    function getIssueName(): Attribute
    {
        return Attribute::make(
            get: function () {
                return $this->getFullNameUserById($this->issue->approver);
            },
        );
    }
    function getAcceptanceName(): Attribute
    {
        return Attribute::make(
            get: function () {
                return $this->getFullNameUserById($this->acceptance->approver);
            },
        );
    }
    function getCloseOutPAName(): Attribute
    {
        return Attribute::make(
            get: function () {
                return $this->getFullNameUserById($this->close_out_pa->approver);
            },
        );
    }
    function getCloseOutAAName(): Attribute
    {
        return Attribute::make(
            get: function () {
                return $this->getFullNameUserById($this->close_out_aa->approver);
            },
        );
    }
    function getRegistryName(): Attribute
    {
        return Attribute::make(
            get: function () {
                return $this->getFullNameUserById($this->registry_of_work_completion->approver);
            },
        );
    }
    function getFullNameUserById($id)
    {
        return User::where('id', $id)->first()->full_name;
    }
    function getToolsEquipment(): Attribute
    {
        return Attribute::make(
            get: function () {
                return $this->convertToolsOrTrade($this->tools_equipment);
            },
        );
    }
    function getTrades(): Attribute
    {
        return Attribute::make(
            get: function () {
                return $this->convertToolsOrTrade($this->trades);
            },
        );
    }
    function convertToolsOrTrade($array)
    {
        $arrayData = array_map(function ($data) {
            return $data['name'];
        }, $array);
        return implode(', ', $arrayData);
    }
    function getHazards(): Attribute
    {
        return Attribute::make(
            get: function () {
                $hazards = collect($this->hazard)->except('hazard_other');
                return $this->convertCheckbox($hazards);
            },
        );
    }
    function getControls(): Attribute
    {
        return Attribute::make(
            get: function () {
                $controls = collect($this->controls)->except('controls_other');
                return $this->convertCheckbox($controls);
            },
        );
    }
    function getSSCR(): Attribute
    {
        return Attribute::make(
            get: function () {
                $sscrs = collect($this->sscr);
                return $this->convertCheckbox($sscrs);
            },
        );
    }
    function convertCheckbox($data)
    {
        $filterData = $data
            ->filter(function ($value, $key) {
                return $value != 0;
            })
            ->keys()
            ->map(function ($value) {
                return ucfirst(str_replace('_', ' ', $value));
            });
        // $filterData->push($this->hazard->hazard_other);
        return implode(', ', $filterData->toArray());
    }
}
