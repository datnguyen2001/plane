<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OneDayPilotModel extends Model
{
    use HasFactory;
    protected $table='one_day_pilot';
    protected $fillable=[
        'title',
        'describe',
        'content',
    ];
}
