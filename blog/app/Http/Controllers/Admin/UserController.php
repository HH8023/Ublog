<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $where = [];
        $ob = DB::table('user');
        if($request->has('user_name')){
            $user_name = $request->input('user_name');
            $where['user_name'] = $user_name;
            $ob->where('user_name','like','%'.$user_name.'%');
        }
        // // 判断是否搜索了sex字段
        // if($request->has('sex')){
        //     // 获取用户搜索的sex字段的值
        //     $sex = $request->input('sex');
        //     $where['sex'] = $sex;
        //     // 给查询语句添加上where条件
        //     $ob->where('sex',$sex);
        // }
        // var_dump($list);
        // dd($request->all());
        $list = $ob->paginate(2);
        // dd($list);
        return view('admin.user.index',['index'=>$list,'where'=>$where]);
        // return view('admin.user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.user.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo 1234567899987654321;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        echo 33333;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }
}
