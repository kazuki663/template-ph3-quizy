@extends('layouts.admin_template')

@section('title', '選択肢一覧')

@section('contents')
<form action="/choice" method="post">
    @csrf
    <table>
        <tr><th>id</th><th>選択肢</th><th>正解</th><th>編集</th><th>削除</th></tr>
        @foreach ($choices as $choice)
            <tr>
                <td>{{$choice->id}}</td>
                <td>{{$choice->choice}}</td>
                <input type="hidden" value="{{$choice->id}}" name="ids[]">
                <td><input type="number" value="{{$choice->valid}}" name="choices[]"></td>
                <td><a href="/choice/edit?id={{$choice->id}}">編集</a></td>
                <td><a href="/choice/del?id={{$choice->id}}">削除</a></td>
            </tr>
        @endforeach
    </table>
    <input type="hidden" name="question_id" value="{{$id}}">
    <input type="submit" value="正解変更">
</form>
<a href="/choice/add?id={{$id}}">追加</a>
@endsection
