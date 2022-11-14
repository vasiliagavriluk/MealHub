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

    public function users()
    {
        return $this->hasMany(Users::class,'id', 'ward_id');
    }

    public function getALL($id)
    {
        $columns = ['lastname','firstname','ward_id'];

        $result = $this
            ->select($columns)
            ->where('id', '=', $id)
            ->with(
                [
                    'users:id,lastname,firstname',
                ])
            ->get();
        return $result;

    }

}
