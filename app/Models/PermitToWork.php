<?php

namespace App\Models;

use App\Helper\CRCHelper;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use App\Helper\RolesAndPermissionsHelper;
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
        ],
        status_desc = [
            1 => 'ON GOING',
            2 => 'SUCCESS',
            3 => 'REJECTED',
            4 => 'DRAFT',
        ];
    public const assignment = [
        'authorisation' => 0,
        'permit_registry' => 1,
        'site_gas_test' => 2,
        'issue' => 3,
        'acceptance' => 4,
        'close_out_pa' => 5,
        'close_out_aa' => 6,
        'registry_of_work_completion' => 7,
    ];
    public function request_pa_relation()
    {
        return $this->belongsTo(User::class, 'request_pa', 'id');
    }
    public function direct_spv_relation()
    {
        return $this->belongsTo(User::class, 'direct_spv', 'id');
    }
    function getInstanceRoleHelper(): RolesAndPermissionsHelper
    {
        $roleHelper = new RolesAndPermissionsHelper();
        return $roleHelper;
    }
    function getInstanceCRCHelper(): CRCHelper
    {
        $crcHelper = new CRCHelper();
        return $crcHelper;
    }
    function scopeGetPermitToWorkByRoleLatest()
    {
        $role = Auth::user()->role_name;
        if ($role == $this->getInstanceRoleHelper()->getRoleName(2)) {
            return $this->getPermitToWorkByRoleIdLatest('direct_spv');
            // return $this->getPermitToWorkByRoleIdLatest('request_pa');
        } elseif ($role == $this->getInstanceRoleHelper()->getRoleName(1)) {
            return $this->getPermitToWorkByRoleIdLatest('request_pa');
        }
    }
    function scopeGetPermitToWorkByRole()
    {
        $role = Auth::user()->role_name;
        if ($role == $this->getInstanceRoleHelper()->getRoleName(2)) {
            return $this->getPermitToWorkByRoleId('direct_spv');
            // return $this->getPermitToWorkByRoleId('request_pa');
        } elseif ($role == $this->getInstanceRoleHelper()->getRoleName(1)) {
            return $this->getPermitToWorkByRoleId('request_pa');
        }
    }
    function getPermitToWorkByRoleIdLatest($relationRole)
    {
        return self::query()
            ->where($relationRole, Auth::id())
            ->latest() // ->take( 5)
            ->first();
    }
    function getPermitToWorkByRoleId($roleRelation)
    {
        return self::where($roleRelation, Auth::id())->get();
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
    function getSignPA(): Attribute
    {
        return Attribute::make(
            get: function () {
                return base64_encode(Storage::disk('signature_employee')->get($this->sign_pa));
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
                // return implode('', explode('_', $this->site_gas_test->approver));
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
                return $this->convertToolsOrTrade($this->tools_equipment, new ToolsEquipment());
            },
        );
    }
    function getTrades(): Attribute
    {
        return Attribute::make(
            get: function () {
                return $this->convertToolsOrTrade($this->trades, new Trade());
            },
        );
    }
    function convertToolsOrTrade($array, $model)
    {
        // return $model;
        $arrayData = array_map(function ($data) use ($model) {
            return $model->where('id', $data)->first()->name;
        }, $array);
        return implode(', ', $arrayData);
    }
    function getHazards(): Attribute
    {
        return Attribute::make(
            get: function () {
                return $this->convertCheckbox($this->hazard->hazard);
            },
        );
    }
    function getControls(): Attribute
    {
        return Attribute::make(
            get: function () {
                return $this->convertCheckboxAbstract($this->controls->controls);
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
        $filterData = collect($data)
            ->filter(function ($value, $key) {
                return $value != null;
            })
            ->map(function ($value) {
                return ucfirst(str_replace('_', ' ', $value));
            });
        return implode(', ', $filterData->toArray());
    }
    function convertCheckboxAbstract($data)
    {
        $crcHelper = $this->getInstanceCRCHelper();
        // return $crcHelper::field;
        $fieldCRC = collect($data)
            ->filter(function ($value, $key) {
                return $value != null;
            })
            ->map(function ($value, $key) use ($crcHelper) {
                return ucfirst(str_replace('_', ' ', $crcHelper::field[$key])) . '(' . $value . ')';
            });
        return implode(', ', $fieldCRC->toArray());
        // return $data;
    }
}
