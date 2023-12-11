<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
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
    public function job()
    {
        return $this->belongsTo(Job::class, 'job_id', 'id');
    }
}
