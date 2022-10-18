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
        $links = BigQuestion::where('hide', 0)->orderBy('order', 'asc')->get();
        return view('admin.list', ['user' => $user, 'links' => $links]);
    }

    public function order(Request $request)
    {
        $lists = $request->input('ids');

        $orders = $request->input('orders');

            foreach($lists as $index => $id){
                $title = BigQuestion::where('id', $id)->first();
                $title->order = $orders[$index];
                $title->save();
            }
        return redirect ('/admin');
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

    public function add(Request $request)
    {
        return view('admin.list_add');
    }

    public function create(Request $request)
    {
        $this->validate($request, BigQuestion::$rules);
        $title = new BigQuestion;
        $title->name = $request->input('name');
        $title->hide = 0;
        $title->order = BigQuestion::max('id') + 1;
        $title->save();
        return redirect('/admin');
    }

    public function edit(Request $request)
    {
        $title = BigQuestion::find($request->id);
        return view('admin.big_question_edit', ['name' => $title]);
    }

    public function update(Request $request)
    {
        $this->validate($request, BigQuestion::$rules);
        $title = BigQuestion::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $title->fill($form)->save();
        return redirect('/admin');
    }

    public function delete(Request $request)
    {
        $title = BigQuestion::find($request->id);
        return view('admin.big_question_delete', ['name' => $title]);
    }

    public function remove(Request $request)
    {
        $this->validate($request, BigQuestion::$rules);
        $title = BigQuestion::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $title->fill($form)->save();
        return redirect('/admin');
    }
}
