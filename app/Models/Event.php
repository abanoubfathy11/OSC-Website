<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    protected $primaryKey = 'id';
    protected $fillable = 
    [
        'name',
        'email',
        'phone',
        'college',
        'grade',
        'committee_A',
        'committee_B',
        'date',
        'time'
    ];
    protected $hidden=['created_at','updated_at'];
}
