<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewModel extends Model
{
    use HasFactory;
    protected $table='news';
    protected $fillable=[
        'name',
        'slug',
        'describe',
        'src',
        'content',
        'display'
    ];
}
