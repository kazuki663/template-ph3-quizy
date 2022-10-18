<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\BigQuestion;
use App\Question;
use App\Choice;

class QuizController extends Controller
{
    public function index(Request $request, $id)
    {
        $title = DB::table('big_questions')->where('id', $id)->first();
        $questions = Question::with('choices')->searchQuestions($id)->get();
        $answers = DB::table('choices')->join('questions', 'choices.question_id', '=', 'questions.id')->where('big_question_id', $id)->where('valid', 1)->get();

        return view('quiz.quiz1', ['title'=>$title, 'questions'=>$questions, 'answers'=>$answers]);
        // return view('quiz.quiz1', ['choices'=>$request->choices, 'image'=>$request->image, 'title'=>$request->title]);
    }

    public function list(Request $request)
    {
        $links = BigQuestion::orderBy('order', 'asc')->get();

        return view('list.list', ['links'=>$links]);
    }
}
