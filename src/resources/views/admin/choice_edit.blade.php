@extends('layouts.admin_template')

@section('title', '選択肢編集')

@section('contents')
<form action="/choice/edit" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="question_id" value="{{$name->question_id}}">
    <input type="hidden" name="id" value="{{$name->id}}">
    <input type="text" name="choice" value="{{$name->choice}}">
    <input type="submit" value="送信">
</form>
@endsection
