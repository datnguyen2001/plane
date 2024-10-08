<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CertificateModel extends Model
{
    use HasFactory;
    protected $table = 'certificate';
    protected $fillable = [
        'src',
        'content'
    ];
}
