<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuestionController extends Controller
{
    public function index(Request $request)
    {
        $questions = Question::where('hide', 0)->where('big_question_id', $request->id)->orderBy('order', 'asc')->get();
        $id = $request->id;
        return view('admin.question_list', ['questions' => $questions, 'id' => $id]);
    }

    public function order(Request $request)
    {
        $big_question_id = $request->big_question_id;

        $lists = $request->input('ids');

        $orders = $request->input('orders');

            foreach($lists as $index => $id){
                $title = Question::where('id', $id)->first();
                $title->order = $orders[$index];
                $title->save();
            }

        return redirect ('/question?id=' . $big_question_id);
    }

    public function add(Request $request)
    {
        $id = $request->id;
        return view('admin.question_add', ['id' => $id]);
    }

    public function create(Request $request)
    {

        $dir = 'image';

        $file_name = $request->file('image')->getClientOriginalName();

        $request->file('image')->storeAs('public/' . $dir, $file_name);

        $id = $request->big_question_id;

        $image = new Question;
        $image->big_question_id = $id;
        $image->image = 'storage/' . $dir . '/' . $file_name;
        $image->hide = 0;
        $image->order = Question::max('id') + 1;
        $image->save();

        return redirect('/question?id=' . $id);
    }

    public function edit(Request $request)
    {
        $name = Question::find($request->id);
        return view('admin.question_edit', ['name' => $name]);
    }

    public function update(Request $request)
    {
        $dir = 'image';

        $file_name = $request->file('image')->getClientOriginalName();

        $request->file('image')->storeAs('public/' . $dir, $file_name);

        $id = $request->big_question_id;

        $image = Question::find($request->id);
        $image->image = 'storage/' . $dir . '/' . $file_name;
        $image->save();

        return redirect('/question?id=' . $id);
    }

    public function delete(Request $request)
    {
        $name = Question::find($request->id);
        return view('admin.question_delete', ['name' => $name]);
    }

    public function remove(Request $request)
    {
        $id = $request->big_question_id;
        $title = Question::find($request->id);
        $title->hide = $request->hide;
        $title->save();
        return redirect('/question?id=' . $id);
    }
}
