<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class PtwDummy extends Model
{
    use HasFactory;

    protected $table =  'ptw_dummy';
    
    use Sortable;

    protected $fillable = ['project', 'employee_name', 'status'];

    public $sortable = ['ptw_id', 'project', 'employee_name', 'start_date', 'status'];
}