@extends('layouts.helloapp')

@section('title', 'index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  {{-- <p>{{$msg}}</p>
  @if (count($errors) > 0)
  <p>入力に問題があります。再入力してください。</p>
  @endif
  <form action="/hello" method="POST">
  <table>
    @csrf
    @if (count($errors) > 0)
    <tr><th>ERROR</th><td>{{$errors->first('msg')}}</td></tr>
    @endif
    <tr><th>Message: </th><td><input type="text" name="msg" value="{{old('msg')}}"></td></tr>
    <tr><th></th><td><input type="submit" value="send"></td></tr>
  </table>
  </form> --}}
  <style>
    th {
        background-color: #999;
        color: #fff;
        padding: 5px, 10px;
    }
    td{
        border: solid 1px #aaa;
        color: #999;
        padding: 5px, 10px;
    }
  </style>
  <table>
    <tr>
        <th><a href="/hello?sort=name">name</a></th>
        <th><a href="/hello?sort=mail">mail</a></th>
        <th><a href="/hello?sort=age">age</a></th>
    </tr>
    @foreach ($items as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->mail}}</td>
            <td>{{$item->age}}</td>
        </tr>
    @endforeach
  </table>
  {{$items->appends(['sort' => $sort])->links()}}
@endsection

@section('footer')
copyright 2020 kazuki.
@endsection
