<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * The database table used by the model.
     *  protected $table 模型关联的表
     * protected $primaryKey   模型关联的主键
     * 
     * @var string
     */
    protected $table = 'user';

    protected $primaryKey = 'uid';

     /**
     * 指定是否模型应该被戳记时间。
     * 如果数据表中没有create_at  update_at这两个字段，
     * 需要关闭自动添加的时间戳
     * @var bool
     */
    public $timestamps = false;

    // 允许数据库批量操作的字段
    // public $fillable = ['',''];
    // 不允许数据库批量操作的字段
    // public $guarded = ['',''];

    public function userInfo(){
    	return $this->hasOne('App\Http\Models\User')
    }
}
