<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\BigQuestion;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $links = BigQuestion::all();
        return view('admin.list', ['user' => $user, 'links' => $links]);
    }

    public function login(Request $request)
    {
        $param = ['msg' => 'ログインしてください。'];
        return view('admin.login', $param);
    }

    public function check(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password])){
            $user = Auth::user();
            $links = BigQuestion::all();
            return view('admin.list', ['user' => $user, 'links' => $links]);
        }else{
            $msg = "ログインに失敗しました";
            return view('admin.login', ['msg' => $msg]);
        }
    }
}
