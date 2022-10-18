@extends('layouts.admin_template')

@section('title', 'タイトル編集')

@section('contents')
<form action="/admin/edit" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$name->id}}">
    <input type="text" name="name" value="{{$name->name}}">
    <input type="submit" value="送信">
</form>
@endsection
