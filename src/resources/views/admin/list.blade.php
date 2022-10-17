@extends('layouts.admin_template')

@section('title', 'タイトル一覧')

@section('contents')
    <table>
        <tr><th>id</th><th>タイトル</th></tr>
        @foreach ($links as $link)
            <tr>
                <td>{{$link->id}}</td>
                <td><a href="quiz/{{$link->id}}">{{$link->name}}</a></td>
            </tr>
    @endforeach
</table>
@endsection
