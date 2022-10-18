<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Choice;

class ChoicesController extends Controller
{
    public function index(Request $request)
    {
        $id = $request->id;
        $choices = Choice::where('question_id', $request->id)->where('hide', 0)->get();
        return view('admin.choice_list', ['choices' => $choices, 'id' => $id]);
    }

    public function change(Request $request)
    {
        $question_id = $request->question_id;

        $lists = $request->input('ids');

        $choices = $request->input('choices');

            foreach($lists as $index => $id){
                $title = Choice::where('id', $id)->first();
                $title->valid = $choices[$index];
                $title->save();
            }

        return redirect ('/choice?id=' . $question_id);
    }

    public function add(Request $request)
    {
        $id = $request->id;
        return view('admin.choice_add', ['id' => $id]);
    }

    public function create(Request $request)
    {

        $id = $request->question_id;

        $image = new Choice;
        $image->question_id = $id;
        $image->choice = $request->choice;
        $image->valid = 0;
        $image->hide = 0;
        $image->save();

        return redirect('/choice?id=' . $id);
    }

    public function edit(Request $request)
    {
        $name = Choice::find($request->id);
        return view('admin.choice_edit', ['name' => $name]);
    }

    public function update(Request $request)
    {

        $id = $request->question_id;

        $choice = Choice::find($request->id);
        $choice->choice = $request->choice;
        $choice->save();

        return redirect('/choice?id=' . $id);
    }

    public function delete(Request $request)
    {
        $name = Choice::find($request->id);
        return view('admin.choice_delete', ['name' => $name]);
    }

    public function remove(Request $request)
    {
        $id = $request->question_id;
        $title = Choice::find($request->id);
        $title->hide = $request->hide;
        $title->save();
        return redirect('/choice?id=' . $id);
    }

}
