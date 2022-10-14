<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\ControllerDoesNotReturnResponseException;
use App\Http\Requests\HelloRequest;
use Illuminate\Foundation\Console\Presets\React;
use Validator;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    public function index(Request $request) {
        // if(isset($request->id)){
        //     $param = ['id' => $request->id];
        //     $items = DB::select('select * from people where id = :id', $param);
        // }else{
        //     $items = DB::select('select * from people');
        // }
        // return view('hello.index', ['items' => $items]);

        $items = DB::table('people')->orderBy('age', 'asc')
        ->get();
        return view('hello.index', ['items' => $items]);
    }

    public function post(Request $request) {
        $items = DB::select('select * from people');
        return view('hello.index', ['items' => $items]);
    }

    public function add(Request $request) {
        return view('hello.add');
    }

    public function create(Request $request) {
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];
        DB::table('people')->insert($param);
        return redirect('/hello');
    }

    public function edit(Request $request) {
        $item = DB::table('people')->where('id', $request->id)->first();
        return view('hello.edit', ['form' => $item]);
    }

    public function update(Request $request) {
        $param = [
            'id' => $request->id,
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];
        DB::table('people')->where('id', $request->id)->update($param);
        return redirect('/hello');
    }

    public function del(Request $request) {
        $item = DB::table('people')->where('id', $request->id)->first();
        return view('hello.del', ['form' => $item]);
    }

    public function remove(Request $request) {
        $param = ['id' => $request->id];
        DB::table('people')->where('id', $request->id)->delete();
        return redirect('/hello');
    }

    public function show(Request $request) {
        $page = $request->page;
        $items = DB::table('people')
            ->offset($page * 3)
            ->limit(3)
            ->get();
        return view('hello.show', ['items' => $items]);
    }

}

// class HelloController extends Controller
// {
//     public function index(Request $request) {
//         $items = DB::select('select * from people');
//         return view('hello.index', ['items' => $items]);
//     }
// }

// class HelloController extends Controller
// {
//     public function index(Request $request) {
//         if ($request->hasCookie('msg')) {
//             $msg = 'Cookie:' . $request->cookie('msg');
//         } else {
//             $msg = '※クッキーはありません。';
//         }
//         return view('hello.index', ['msg'=> $msg]);
//     }

//     public function post(Request $request) {
//         $validate_rule = [
//             'msg' => 'required',
//         ];
//         $this->validate($request, $validate_rule);
//         $msg = $request->msg;
//         $response = response()->view('hello.index',
//             ['msg'=>'「' . $msg . '」をクッキーに保存しました']);
//         $response->cookie('msg', $msg, 100);
//         return $response;
//     }
// }

    // class HelloController extends Controller
    // {
    //     public function index(Request $request) {
    //         $validator = Validator::make($request->query(), [
    //             'id' => 'required',
    //             'pass' => 'required',
    //         ]);
    //         if ($validator->fails()) {
    //             $msg = 'クエリーに問題があります。';
    //         } else {
    //             $msg = 'ID/PASSを受け付けました。フォームを入力してください。';
    //         }
    //         return view('hello.index', ['msg'=>$msg,]);
    //     }

    //     public function post(Request $request) {
    //         $rules = [
    //             'name' => 'required',
    //             'mail' => 'email',
    //             'age' => 'numeric',
    //         ];
    //         $messages = [
    //             'name.required' => '名前は必ず入力してください',
    //             'mail.email' => 'メールアドレスの入力が必要です',
    //             'age.numeric' => '年齢を整数で入力してください。',
    //             'age.min' => '年齢は0以上で記入ください。',
    //             'age.max' => '年齢は200以下で記入ください。',
    //         ];
    //         $validator =  Validator::make($request->all(),$rules, $messages);
    //         $validator->sometimes('age', 'min:0', function($input){
    //             return !is_int($input->age);
    //         });
    //         $validator->sometimes('age', 'max:200', function($input){
    //             return !is_int($input->age);
    //         });
    //         if ($validator->fails()) {
    //             return redirect('/hello')
    //             ->withErrors($validator)
    //             ->withInput();
    //         }
    //         return view('hello.index', ['msg'=>'正しく入力されました!']);
    //     }
    // }

