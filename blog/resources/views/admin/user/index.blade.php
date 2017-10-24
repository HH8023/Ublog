@extends('admin.public.parent')

@section('content')
	<div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
        <div class="widget am-cf">
            <div class="widget-head am-cf">
                <div class="widget-title am-fl">用户列表</div>
                <div class="widget-function am-fr">
                    <a href="javascript:;" class="am-icon-cog"></a>
                </div>
            </div>
            <div class="am-fl tpl-header-search">
                    <form class="tpl-header-search-form" action="{{ url('admin/user') }}" method="post">
                        {{ csrf_field() }}
                        <button class="tpl-header-search-btn am-icon-search"></button>
                        <input class="tpl-header-search-box" type="text" placeholder="搜索姓名" name="user_name">
                    </form>
            </div>
            <div class="widget-body  widget-body-lg am-fr">

                <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>用户ID</th>
                            <th>用户名</th>
                            <th>手机号</th>
                            <th>性别</th>
                            <th>头像</th>
                            <th>生日</th>
                            <th>ip</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        

                        @foreach($index as $user)
                            <tr class="gradeX">
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->user_id }}</td>
                                <td>{{ $user->user_name }}</td>
                                <td>{{ $user->tel }}</td>
                                <td>{{ ($user->sex == 1)?'男':'女' }}</td>
                                <td><input type="image" src="{{ asset('admin/assets/img/upload/'.$user->photo) }}" style="width: 60px;" /></td>
                                <td>{{ $user->birthday }}</td>
                                <td>{{ $user->ip }}</td>
                                <td>
                                    <div class="tpl-table-black-operation">
                                        <a href="javascript:;">
                                            <i class="am-icon-pencil"></i> 查看
                                        </a>
                                        <a href="javascript:;" class="tpl-table-black-operation-del">
                                            <i class="am-icon-trash"></i> 禁言
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        
                       @endforeach
                        

                        <!-- more data -->
                    </tbody>
                </table>
                <!-- {!! $index->fragment('foo')->render() !!} -->
                {!! $index->render() !!}
            </div>
        </div>
    </div>

@endsection

