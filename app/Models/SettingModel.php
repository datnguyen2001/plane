<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingModel extends Model
{
    use HasFactory;
    protected $table = 'setting';
    protected $fillable=[
        'logo',
        'logo_footer',
        'describe',
        'address',
        'phone',
        'facebook',
        'youtube',
        'twitter',
        'instagram',
        'iframe_facebook'
    ];
}
