@extends('layouts.quiz_template')

@section('header')
    @include('components.header')
@endsection

@section('title')
    {{$title}}
@endsection

@section('quizy_net')
    <img class= "k" src="https://pbs.twimg.com/profile_images/1352968042024562688/doQgizBj_400x400.jpg" alt="k">
    <a class= "kuizy" href="https://kuizy.net/user/kuizy_net">@kuizy_net</a>
@endsection

@section('contents')
  @for($i = 1;$i <= 3;$i++)
    @component('components.quiz_contents')
        @slot('quiz_num')
        {{$i}}
        @endslot
        @slot('image')
        {{$image[$i-1]}}
        @endslot
    @endcomponent
        <ul>
          @foreach($choices[$i-1] as $choice)
          <li class="selections">{{$choice}}</li>
          @endforeach
        </ul>
  @endfor
@endsection