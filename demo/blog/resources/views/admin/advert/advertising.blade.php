@extends('admin.public.parent')

@section('content')



<div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
        <div class="widget am-cf">
            <div class="widget-head am-cf">
                <div class="widget-title am-fl">广告列表</div>
                <div class="widget-function am-fr">
                    <a href="javascript:;" class="am-icon-cog"></a>
                </div>
            </div>

            <!-- 搜索 -->
                <div class="am-fl tpl-header-search">
                    <form class="tpl-header-search-form" action="{{ url('admin/advertising')}}">
                        <button class="tpl-header-search-btn am-icon-search"></button>
                        <input class="tpl-header-search-box" type="text" placeholder="搜索作者..." name='name'>
                    </form>

                </div>
               
            <div class="widget-body  widget-body-lg am-fr">

                <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
               
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>用户</th>
                            <th>标题</th>
                            <th广告图></th>
                            <th>地址</th>
                            <th>状态</th>
                            <th>广告开始时间</th>
                            <th>广告结束时间</th>
                        </tr>
                    </thead>
                    <tbody>
                 
                       @foreach ($adve as $v) 
                       <tr class="gradeX">
                            <td>{{ $v->id }}</td>
                            <td>{{ $v->uid}}</td>
                            <td>{{ $v->title }}</td>
                            <td>{{ $v->image }}</td>
                            <td>{{ $v->address }}</td>
                            <td>{{ $v->state }}</td>
                            <td>{{ $v->start_time }}</td>
                             <td>{{ $v->end_time }}</td>
                            <td>
                            	  <a href="{{ url('admin/advert/create')}}" class='btn btn-sm'>添加</a>
                                 <a href="" class='btn btn-sm'>修改</a>
                                 <a href="" class='btn btn-sm'>删除</a>

                            </td>
                       </tr> 
                     @endforeach 
                        <!-- more data -->
                    </tbody>
                </table>
                  <!-- 分页 -->
               <div class="am-u-lg-12 am-cf">

                    <div class="am-fr">
                        <ul class="am-pagination tpl-pagination">
                            <li class="am-disabled"><a href="">«</a></li>
                            <li class="am-active"><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="#">3</a></li>
                          
                            <li><a href="#">»</a></li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>
    </div>



@endsection