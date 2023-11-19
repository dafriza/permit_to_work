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
}
