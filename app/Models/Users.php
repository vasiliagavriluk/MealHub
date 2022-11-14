<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Users extends Model
{
    protected $fillable = [
        'lastname',
        'firstname',
        'ward_id',
    ];

}
