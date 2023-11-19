<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PermitToWork extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];
    protected $casts = [
        'tools_equipment' => 'array',
        'hazard' => 'object',
        'controls' => 'object',
        'cross_referenced_certificates' => 'object',
        'submission' => 'object',
        'authorization_and_issuing' => 'object',
        'completion' => 'object',
    ];
    public function request_pa()
    {
        return $this->belongsTo(User::class, 'request_pa', 'nip');
    }
    public function direct_spv()
    {
        return $this->belongsTo(User::class, 'direct_spv', 'nip');
    }
}
