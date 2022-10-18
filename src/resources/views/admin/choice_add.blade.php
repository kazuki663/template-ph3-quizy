@extends('layouts.admin_template')

@section('title', '選択肢追加')

@section('contents')
<form action="/choice/add" method="post">
    @csrf
    <input type="hidden" name="question_id" value="{{$id}}">
    <label for="choice">選択肢</label>
    <input type="text" name="choice">
    <input type="submit" value="追加">
</form>
@endsection
