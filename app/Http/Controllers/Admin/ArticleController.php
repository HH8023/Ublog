<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Models\Artcal_list;
use App\Http\Models\Artcal_detail;
class ArticleController extends Controller
{
    /**
     * 图文列表
     *
     * @return \Illuminate\Http\Response
     */

    public function plist()
    {
        return view('admin.article.plist');
    }

    public function index()
    {   
        //连接文章列表的模型
        $title = Artcal_list::get();
        //  $ad = $title->detail->content;
        // dd($ad);

        return view('admin.article.index', ['title' => $title]);
        
    }

    /**
     * Show the form for creating a new resource.
     *添加文章
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$title =DB::table('artical_list')->get();
        return view('admin.article.add');
    }

    /**
     * Store a newly created resource in storage.
     *内容没完成
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        //去除令牌
        $add = $request->except('_token','query_string');
        $add = new Artcal_list;
        $title = new Artcal_detail;
        
       //$aid = Artcal_list::get(['id']);

        //$artid = Artcal_detail::get(['art_id']); 
         //$aid -> $artid;
        // 文章内容表添加内容
        $title->content = $request->content;
        $title->save();
        // dd($add);
        // $res = $add->get();
        //$add->detail->content '==' $request->content;
        // $re = $res->detail->id;
        //dd($re);
        // $add = Artcal_detail->where('art_id','=','id');

        //$add->detail()->content =  $request->content;
        // 文章list表添加内容
        $add->title = $request->title;
        $add->user_id = $request->user_id;
        $add->pro_id = $request->pro_id;
        $add->add_time = $request->add_time;

        $add->save();

        //$title->save();
        //dd($add);
        return view('admin.article.add');


       
    }

    /**
     * 文章查看页面
     *内容没完成
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $title =DB::table('artical_list')->where('id',$id)->first();
        
        // $art_id=$id;

        // $title1 = DB::table('artical_detail')->where('art_id',$art_id)->first();
       // $title = detail->content;
        //$title = Artcal_list::get();
       $title = Artcal_list::where('id',$id)->first();
        //$title = where('id',$id)->first();
       //  $ad = $title->detail->content;
       // dd($ad);
        return view('admin.article.artEditor',['title' => $title]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       echo 1111;
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
        echo 1213;
       //return view('admin.article.wzbj');
    }

    /**
     * Remove the specified resource from storage.
     *文章删除
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $res = Artcal_list::where('id',$id)->delete();
        //$res = DB::table('artical_list')->where('id', $id)->delete();
        if($res > 0){
            return redirect('/article')->with('msg', '删除成功');
        }else{
            return redirect('/article')->with('msg', '删除失败');
        }
    }
}
