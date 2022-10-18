@extends('layouts.admin_template')

@section('title', 'タイトル追加')

@section('contents')
<form action="/admin/add" method="post">
    @csrf
    <input type="text" name="name">
    <input type="submit" value="追加">
</form>
@endsection
