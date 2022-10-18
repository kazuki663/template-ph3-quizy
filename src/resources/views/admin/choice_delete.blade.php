@extends('layouts.admin_template')

@section('title', '選択肢削除')

@section('contents')
<form action="/choice/del" method="post">
    @csrf
    <table>
        <tr><th>id</th><th>選択肢</th></tr>
        <tr>
            <input type="hidden" name="question_id" value="{{$name->question_id}}">
            <td><input type="number" name="id" value="{{$name->id}}" readonly></td>
            <td><input type="text" name="choice" value="{{$name->choice}}" readonly></td>
            <input type="hidden" name="hide" value="1">
        </tr>
    </table>
    <input type="submit" value="削除">
</form>
@endsection
