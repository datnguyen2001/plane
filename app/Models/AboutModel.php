<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutModel extends Model
{
    use HasFactory;
    protected $table = 'about';
    protected $fillable = [
        'name',
        'describe',
        'src1',
        'src2',
        'stewardess',
        'pilot',
        'content'
    ];
}
