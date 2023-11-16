<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PermitToWorkController extends Controller
{
    protected $guarded = [];
    public function request_pa()
    {
        return $this->belongsTo(User::class, 'request_pa', 'nip');
    }
    public function direct_spv()
    {
        return $this->belongsTo(User::class, 'direct_spv', 'nip');
    }
}
