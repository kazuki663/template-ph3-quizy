@extends('layouts.admin_template')

@section('title', '問題一覧')

@section('contents')
<form action="/question" method="post">
    @csrf
    <table>
        <tr><th>id</th><th>問題</th><th>順番</th><th>編集</th><th>削除</th></tr>
        @foreach ($questions as $question)
            <tr>
                <td>{{$question->id}}</td>
                <td><a href="/choice?id={{$question->id}}">{{$question->image}}</a></td>
                <td>
                    <input type="hidden" value="{{$question->id}}" name="ids[]">
                    <input type="text" value="{{$question->order}}" name="orders[]">
                </td>
                <td><a href="/question/edit?id={{$question->id}}">編集</a></td>
                <td><a href="/question/del?id={{$question->id}}">削除</a></td>
            </tr>
        @endforeach
    </table>
    <input type="submit" value='順番変更'>
</form>
<a href="/question/add">追加</a>
@endsection
