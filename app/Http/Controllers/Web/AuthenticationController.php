<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
//use socialiteproviders
use App\User;
use Auth;

class AuthenticationController extends Controller
{
    public function getSocialRedirect($account)
    {
        try {
            return Socialite::driver($account)->redirect();
        } catch (\InvalidArgumentException $e) {
            return redirect('/login');
        }
    }

    public function getSocialCallback($account)
    {
        // 从第三方 OAuth 回调中获取用户信息
        $socialUser = Socialite::driver($account)->user();
//        dd($socialUser->id);
        // 在本地 users 表中查询该用户来判断是否已存在
        $user = User::where( 'provider_id', '=', $socialUser->id )
            ->where( 'provider', '=', $account )
            ->first();
        if ($user == null && $account=='github') {
            // 如果该用户不存在则将其保存到 users 表
            $newUser = new User();

            $newUser->name        = $socialUser->getNickName();
            $newUser->email       = $socialUser->getEmail() == '' ? '' : $socialUser->getEmail();
            $newUser->avatar      = $socialUser->getAvatar();
            $newUser->password    = '';
            $newUser->provider    = $account;
            $newUser->provider_id = $socialUser->getId();

            $newUser->save();
            $user = $newUser;

            // 手动登录该用户
            Auth::login( $user );
        } elseif ($user == null && $account=='qq') {
            $newUser = new User();
            $newUser->name = $socialUser->nickname;
            $newUser->email = $socialUser->email;
            $newUser->avatar = $socialUser->avatar;
            $newUser->password = '';
            $newUser->provider    = $account;
            $newUser->provider_id = $socialUser->id;

            $newUser->save();
            $user = $newUser;

            // 手动登录该用户
            Auth::login( $user );
        } else {
            dd('未知登录');
        }
        dd(Auth::user());
        // 登录成功后将用户重定向到首页
        return redirect('/');
    }
}
