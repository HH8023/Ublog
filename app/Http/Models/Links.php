<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Links extends Model
{
    //
   	const TABLE_NAME = 'links';
   	protected $primaryKey = 'lid';
    protected $guarded = [];
    public $timestamps = false;
}
