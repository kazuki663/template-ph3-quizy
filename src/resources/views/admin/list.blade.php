@extends('layouts.admin_template')

@section('title', 'タイトル一覧')

@section('contents')
@if($errors)
    {{$errors->first('orders.*')}}
@endif
<form action="/admin" method="post">
    @csrf
    <table>
        <tr><th>id</th><th>タイトル</th><th>順番</th><th>編集</th><th>削除</th></tr>
        @foreach ($links as $link)
            <tr>
                <td>{{$link->id}}</td>
                <td><a href="/question?id={{$link->id}}">{{$link->name}}</a></td>
                <td>
                    <input type="hidden" value="{{$link->id}}" name="ids[]">
                    <input type="text" value="{{$link->order}}" name="orders[]">
                </td>
                <td><a href="/admin/edit?id={{$link->id}}">編集</a></td>
                <td><a href="/admin/del?id={{$link->id}}">削除</a></td>
            </tr>
    @endforeach
</table>
<input type="submit" value='順番変更'>
</form>
<a href="/admin/add">追加</a>

@endsection
