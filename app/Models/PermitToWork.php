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
        'cross_referenced_certificates' => 'object',
        'submission' => 'object',
        'authorization_and_issuing' => 'object',
        'completion' => 'object',
        // 'permitDesc' => 'object',
        // 'isolationDesc' => 'object',
        // 'procedureDesc' => 'object',
    ];
    const main_issue = [
        'site_controller' => 'Authorization',
        'permit_controller' => 'Permit Registry',
        'authorized_gas_tester' => 'Site Gast Test',
        'performing_authority' => 'Acceptance',
        'area_authority' => 'Issue',
    ];
    const status_issue = [
        'rejected' => 'danger,error,x',
        'on going' => 'secondary,warning,info-circle',
    ];
    public function request_pa()
    {
        return $this->belongsTo(User::class, 'request_pa', 'id');
    }
    public function direct_spv_relation()
    {
        return $this->belongsTo(User::class, 'direct_spv', 'id');
    }
    function mainIssue(): Attribute
    {
        return new Attribute(
            get: function () {
                $main_issue = [];
                foreach ($this->authorization_and_issuing as $key => $value) {
                    $main_issue[] = self::main_issue[$key];
                }
                return $main_issue;
            },
        );
    }
    function statusIssue(): Attribute
    {
        return new Attribute(
            get: function () {
                return self::status_issue;
            },
        );
    }
}
