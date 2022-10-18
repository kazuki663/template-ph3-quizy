@extends('layouts.admin_template')

@section('title', '問題編集')

@section('contents')
<form action="/question/edit" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="big_question_id" value="{{$name->big_question_id}}">
    <input type="hidden" name="id" value="{{$name->id}}">
    <input type="file" name="image" value="{{$name->image}}">
    <input type="submit" value="送信">
</form>
@endsection
