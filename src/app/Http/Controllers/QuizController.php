<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{
    public function index(Request $request, $id)
    {
        $title = DB::table('big_questions')->where('id', $id)->first();
        $questions = DB::table('questions')->where('big_question_id', $id)->get();
        $choices = [];
        $answers = DB::table('choices')->join('questions', 'choices.question_id', '=', 'questions.id')->where('big_question_id', $id)->where('valid', 1)->get();

        foreach($questions as $question){
            $question_choice = DB::table('choices')->where('question_id', $question->id)->get();
            array_push($choices, $question_choice);
        }

        return view('quiz.quiz1', ['title'=>$title, 'questions'=>$questions, 'choices'=>$choices, 'answers'=>$answers]);
        // return view('quiz.quiz1', ['choices'=>$request->choices, 'image'=>$request->image, 'title'=>$request->title]);
    }

    public function list(Request $request)
    {
        $links = DB::table('big_questions')->get();

        return view('list.list', ['links'=>$links]);
    }
}
