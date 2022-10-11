@extends('layouts.quiz_template')

@section('header')
    @include('components.header')
@endsection

@section('title')
    {{$title}}
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
          @each('components.quiz_sections', $choices[$i-1], 'selection')
        </ul>
  @endfor
@endsection
