@extends('layouts.admin_template')

@section('title', '問題追加')

@section('contents')
<form action="/question/add" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="big_question_id" value="@php echo $_GET['id'] @endphp">
    <input type="file" name="image">
    <input type="submit" value="追加">
</form>
@endsection
