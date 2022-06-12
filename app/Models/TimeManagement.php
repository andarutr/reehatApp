<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeManagement extends Model
{
    use HasFactory;

    public $table = 'time_management';
    
    protected $guarded = [];
    public $timestamps = FALSE;
}
