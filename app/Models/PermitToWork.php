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
                $resultDate = $dateNow->diffInDays($datePTW);
                return $resultDate;
            },
        );
    }
}
