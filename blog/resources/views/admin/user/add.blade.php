@extends('admin.public.parent')

@section('content')

<div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
    <div class="widget am-cf">
        <div class="widget-head am-cf">
            <div class="widget-title am-fl">添加用户</div>
            <div class="widget-function am-fr">
                <a href="javascript:;" class="am-icon-cog"></a>
            </div>
        </div>
        <div class="widget-body am-fr">

            <form class="am-form tpl-form-line-form" action="{{ url('/admin/user') }}" method="post">
                <div class="am-form-group">
                    <label for="user-name" class="am-u-sm-3 am-form-label">编号 <span class="tpl-form-line-small-title">ID</span></label>
                    <div class="am-u-sm-9">
                        <input type="text" class="tpl-form-input" id="user-name" placeholder="" name="id">
                        <!-- <small>请填写标题文字10-20字左右。</small> -->
                    </div>
                </div>

                <div class="am-form-group">
                    <label for="user-name" class="am-u-sm-3 am-form-label">手机号 <span class="tpl-form-line-small-title">Tel</span></label>
                    <div class="am-u-sm-9">
                        <input type="text" class="tpl-form-input" id="user-name" placeholder="" name="tel">
                        <!-- <small>请填写标题文字10-20字左右。</small> -->
                    </div>
                </div>

                <div class="am-form-group">
                    <label class="am-u-sm-3 am-form-label">密码 <span class="tpl-form-line-small-title">Password</span></label>
                    <div class="am-u-sm-9">
                        <input type="text" placeholder="输入密码" name="pw">
                    </div>
                </div>

                <div class="am-form-group">
                    <label for="user-phone" class="am-u-sm-3 am-form-label">性别 <span class="tpl-form-line-small-title">Sex</span></label>
                    <div class="am-u-sm-9">
                        <select data-am-selected="{searchBox: 1}" style="display: none;">
                            <option value="0">--请选择--</option>
                            <option value="1">男</option>
                            <option value="2">女</option>
                        </select>

                    </div>
                </div>

                <div class="am-form-group">
                    <label for="user-weibo" class="am-u-sm-3 am-form-label">头像 <span class="tpl-form-line-small-title">Images</span></label>
                    <div class="am-u-sm-9">
                        <div class="am-form-group am-form-file">
                            <div class="tpl-form-file-img">
                                <img src="assets/img/a5.png" alt="">
                            </div>
                            <button type="button" class="am-btn am-btn-danger am-btn-sm">
                                <i class="am-icon-cloud-upload"></i> 添加头像图片</button>
                            <input id="doc-form-file" type="file" multiple="" name="photo">
                        </div>

                    </div>
                </div>

                <div class="am-form-group">
                    <label for="user-email" class="am-u-sm-3 am-form-label">出生时间 <span class="tpl-form-line-small-title">Year</span></label>
                    <div class="am-u-sm-9">
                        <input type="text" class="am-form-field tpl-form-no-bg" placeholder="出生时间" name="birthday" data-am-datepicker="" readonly="">
                        <small>出生时间为必填</small>
                    </div>
                </div>

                <div class="am-form-group">
                    <label for="user-weibo" class="am-u-sm-3 am-form-label">登录IP地址 <span class="tpl-form-line-small-title">IP</span></label>
                    <div class="am-u-sm-9">
                        <input type="text" id="user-weibo" placeholder="请添加IP用点号隔开" name="ip">
                        <div>

                        </div>
                    </div>
                </div>

               <!--  <div class="am-form-group">
                    <label for="user-intro" class="am-u-sm-3 am-form-label">隐藏文章</label>
                    <div class="am-u-sm-9">
                        <div class="tpl-switch">
                            <input type="checkbox" class="ios-switch bigswitch tpl-switch-btn" checked="">
                            <div class="tpl-switch-btn-view">
                                <div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div> -->

             <!--    <div class="am-form-group">
                    <label for="user-intro" class="am-u-sm-3 am-form-label">文章内容</label>
                    <div class="am-u-sm-9">
                        <textarea class="" rows="10" id="user-intro" placeholder="请输入文章内容"></textarea>
                    </div>
                </div> -->

                <div class="am-form-group">
                    <div class="am-u-sm-9 am-u-sm-push-3">
                        <input type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success "/>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection

