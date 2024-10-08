<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterInformationModel extends Model
{
    use HasFactory;
    protected $table = 'register_information';
    protected $fillable = [
        'name',
        'phone',
        'email',
        'course'
    ];
}
