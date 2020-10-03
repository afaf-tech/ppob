<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class UserModel extends Model
{
    protected $table 	= 'users';
    protected $guarded = [''];
    protected $hidden   = ['created_at','updated_at'];
    public $incrementing = false;

}
