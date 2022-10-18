<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuestionController extends Controller
{
    public function index(Request $request)
    {
        $questions = Question::where('hide', 0)->where('big_question_id', $request->id)->orderBy('order', 'asc')->get();
        return view('admin.question_list', ['questions' => $questions]);
    }

    public function add(Request $request)
    {
        return view('admin.question_add');
    }

    public function create(Request $request)
    {
        $dir = 'image';

        $file = $request->file('image')->store('public/' . $dir);

        $id = $request->big_question_id;

        $image = new Question;
        $image->big_question_id = $id;
        $image->image = 'storage/' . $dir . '/' . $file;
        $image->hide = 0;
        $image->order = Question::max('id') + 1;
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
