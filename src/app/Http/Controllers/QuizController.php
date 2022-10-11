<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index(Request $request)
    {
        // if($id == 1){
        //     $title = "東京の難読地名クイズ";
        //     $choices = [
        //         ['たかなわ', 'たかわ', 'こうわ'],
        //         ['かめど', 'かめいど', 'かめと'],
        //         ['かゆまち', 'こうじまち', 'おかとまち']
        //     ];
        //     $image = ["https://d1khcm40x1j0f.cloudfront.net/quiz/34d20397a2a506fe2c1ee636dc011a07.png", "https://d1khcm40x1j0f.cloudfront.net/quiz/512b8146e7661821c45dbb8fefedf731.png", "https://d1khcm40x1j0f.cloudfront.net/quiz/ad4f8badd896f1a9b527c530ebf8ac7f.png"
        // ];
        //     return view('quiz.quiz1', ['choices'=>$choices, 'image'=>$image, 'title'=>$title]);
        // }
        // elseif($id == 2){
        //     $title = '広島の難読地名クイズ';
        //     $choices = [
        //         ['a', 'i', 'u'],
        //         ['e', 'o', 'ka'],
        //         ['ki', 'ku', 'ke']
        //     ];
        //     $image = ["https://d1khcm40x1j0f.cloudfront.net/quiz/34d20397a2a506fe2c1ee636dc011a07.png", "https://d1khcm40x1j0f.cloudfront.net/quiz/512b8146e7661821c45dbb8fefedf731.png", "https://d1khcm40x1j0f.cloudfront.net/quiz/ad4f8badd896f1a9b527c530ebf8ac7f.png"
        // ];
        //     return view('quiz.quiz1', ['choices'=>$choices, 'image'=>$image, 'title'=>$title]);
        // }
        return view('quiz.quiz1', ['choices'=>$request->choices, 'image'=>$request->image, 'title'=>$request->title]);
    }
}
