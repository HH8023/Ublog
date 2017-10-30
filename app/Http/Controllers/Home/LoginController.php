<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use iscms\Alisms\SendsmsPusher as Sms;
use DB;

class LoginController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('home.login.login');
    }
    public function register()
    {
        return view('home.login.register');
    }

    public $sms;

    public function __construct(Sms $sms)
    {
        $this->sms=$sms;
    }
    public function code(Request $request)
    {
        // 获取input全部信息
        $input = $request->all();
        // 随机生成验证码
        $number = rand(100000,999999);
//        将验证码存在session里
        session_start();
        $request->session()->put('number', $number);
//        获取input的手机号
        $phone = $input['tel'];
        // 获取验证码
        $yzm = [
            'number' => $number
        ];
        // 获取数字签名
        $name = '兄弟连';
        // 转换验证码的json格式
        $content = json_encode($yzm);
        // 获取sms的模板CODE
        $code = 'SMS_75835101';
        // 全部获取之后发送到个人手机号
        $result=$this->sms->send($phone,$name,$content,$code);
        return 'ok';
    }

    public function doRegister(Request $request)
    {
        session_start();
        //去除token
        $data = $request->except('_token');
//        dd($data['sms_code']);
//        dd($request->session['number']);
//        if(session['number']!==$data['sms_code']){
//            return redirect('home/register')->with('msg','验证码不正确');
//            die;
//        }
//        DB::table('users');
    }
    public function doLogin(Request $request)
    {
//        dd($request->all());
        $data = $request->except('_token','session');
        $tel = DB::table('users')->where('tel', $data['tel'])->first();
//        dd($tel);
        if($tel == null){
            return redirect('home/register')->with('msg','无此用户，请先注册');
        }else{
//            dd($tel);
//            echo 1234;
            if ($data['password'] == $tel->password) {
                session_start();
                $request->session()->put('tel', $data['tel']);
                return 12345;
            } else {
                return redirect('home/login')->with('msg','密码不正确');
            }
        }
    }

    public function doLogout(Request $request)
    {
        $request->session()->pull('tel');
        return redirect('admin/login');
    }
}
