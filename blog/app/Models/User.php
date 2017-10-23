<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //设置表名
    const TABLE_NAME="user";
    protected $table = self::TABLE_NAME;  
    public $timestamps = false;
}
