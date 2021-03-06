﻿@extends('admin.public.parent')

@section('content')
	

<div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
    <div class="widget am-cf">
        <div class="widget-head am-cf">
            <div class="widget-title  am-cf">用户列表</div>


        </div>
        <div class="widget-body  am-fr">

            <div class="am-u-sm-12 am-u-md-6 am-u-lg-5">
                <div class="am-form-group">
                    <div class="am-btn-toolbar">
                        <div class="am-btn-group am-btn-group-xs">
                         
                        </div>
                    </div>
                </div>
            </div>
            <div class="am-u-sm-12 am-u-md-6 am-u-lg-2">
                <div class="am-form-group tpl-table-list-select">
                    
                </div>
            </div>
            <div class="am-u-sm-12 am-u-md-12 am-u-lg-4">
                <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                    <input type="text" class="am-form-field ">
                    <span class="am-input-group-btn">
                        <button class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search" type="button"></button>
                    </span>
                </div>
            </div>

            <div class="am-u-sm-12">
                <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " >
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>用户id</th>
                            <th>昵称</th>
                            <th>账号</th>
                            <th>密码</th>
                            <th>性别</th>
                            <th>头像</th>
                            <th>生日</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="gradeX">
                            <td>Am</td>
                            <td>张鹏飞</td>
                            <td>2016-09-26</td>
                            <td>张鹏飞</td>
                            <td>2016-09-26</td>
                            <td>张鹏飞</td>
                            <td>张鹏飞</td>
                            <td>2016-09-26</td>
                            <td>
                                <div class="tpl-table-black-operation">
                                    <a href="javascript:;">
                                        <i class="am-icon-pencil"></i> 编辑
                                    </a>
                                    <a href="javascript:;" class="tpl-table-black-operation-del">
                                        <i class="am-icon-trash"></i> 删除
                                    </a>
                                </div>
                            </td>
                        </tr>
                        
                       
                        <!-- more data -->
                    </tbody>
                </table>
            </div>
            <div class="am-u-lg-12 am-cf">

                <div class="am-fr">
                    <ul class="am-pagination tpl-pagination">
                        <li class="am-disabled"><a href="#">«</a></li>
                        <li class="am-active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection

