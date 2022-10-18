@extends('layouts.admin_template')

@section('title', 'タイトル削除')

@section('contents')
<form action="/admin/del" method="post">
    @csrf
    <table>
        <tr><th>id</th><th>タイトル</th></tr>
        <tr>
            <td><input type="number" name="id" value="{{$name->id}}" readonly></td>
            <td><input type="text" name="name" value="{{$name->name}}" readonly></td>
            <td><input type="hidden" name="hide" value="1"></td>
        </tr>
    </table>
    <input type="submit" value="削除">
</form>
@endsection
