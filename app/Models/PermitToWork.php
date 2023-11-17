<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermitToWork extends Model
{
    use HasFactory;

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
