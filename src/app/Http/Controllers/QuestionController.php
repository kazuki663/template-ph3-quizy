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
}
