@extends('layouts.admin_template')

@section('title', '問題削除')

@section('contents')
<form action="/question/del" method="post">
    @csrf
    <table>
        <tr><th>画像</th><th>id</th></tr>
        <tr>
            <td><input type="hidden" name="big_question_id" value="{{$name->big_question_id}}"></td>
            <td><input type="number" name="id" value="{{$name->id}}" readonly></td>
            <td><img src="{{asset($name->image)}}" alt=""></td>
            <td><input type="hidden" name="hide" value="1"></td>
        </tr>
    </table>
    <input type="submit" value="削除">
</form>
@endsection
