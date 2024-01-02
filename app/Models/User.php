<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, SoftDeletes;
    //protected $fillable = ['name', 'email', 'password'];

    // protected $hidden = ['password', 'remember_token'];

    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];
    protected $guarded = [];
    public function request_pa()
    {
        return $this->hasMany(PermitToWork::class, 'request_pa', 'id');
    }
    public function direct_spv_relation()
    {
        return $this->hasMany(PermitToWork::class, 'direct_spv_relation', 'id');
    }
    public function job()
    {
        return $this->belongsTo(Job::class, 'job_id', 'id');
    }
    public function entry_permit()
    {
        return $this->hasMany(EntryPermit::class, 'user_id', 'id');
    }
    function fullName(): Attribute
    {
        return new Attribute(get: fn() => $this->first_name . ' ' . $this->last_name);
    }
    function roleName(): Attribute
    {
        return new Attribute(get: fn() => ucfirst($this->getRoleNames()->first()));
    }
}
