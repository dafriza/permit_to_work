<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded = [];
    public function user()
    {
        return $this->hasMany(User::class, 'job_id', 'id');
    }
}
