<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BecomePilotModel extends Model
{
    use HasFactory;
    protected $table = 'become_pilot';
    protected $fillable = [
        'name',
        'content',
        'title_one',
        'name_1',
        'src_1',
        'content_1',
        'name_2',
        'src_2',
        'content_2',
        'name_3',
        'src_3',
        'content_3',
        'name_4',
        'src_4',
        'content_4',
        'name_5',
        'src_5',
        'content_5',
        'name_6',
        'src_6',
        'content_6',
        'title_two',
        'content_two',
        'title_three',
        'content_three',
        'title_four',
        'content_four'
    ];
}
