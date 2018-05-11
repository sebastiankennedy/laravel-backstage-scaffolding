<?php

namespace App\Http\Controllers\Backstage;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

/**
 * Class AuthenticationController 后台用户认证控制器
 *
 * @package App\Http\Controllers\Backstage
 */
class AuthenticationController extends Controller
{
    use AuthenticatesUsers;

    /**
     * AuthenticationController constructor.
     */
    public function __construct()
    {
        // 指定中间件、中间件参数、中间件作用域
        $this->middleware('guest:backstage')->except('logout');
    }

    /**
     * 显示后台认证页面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('backstage.authentication.login');
    }

    /**
     * 定义用户认证后的路由跳转
     *
     * @return string
     */
    public function redirectPath()
    {
        return route('backstage.dashboard.index');
    }

    /**
     * 定义用户认证时的登录字段
     *
     * @return string
     */
    public function username()
    {
        return 'account';
    }

    /**
     * 用户退出登录
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect(route('backstage.authentication.login.page'));
    }

    /**
     * 定义用户认证时的看守器
     *
     * @return mixed
     */
    public function guard()
    {
        return auth()->guard('backstage');
    }
}
