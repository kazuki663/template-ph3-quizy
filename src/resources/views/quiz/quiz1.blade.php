@extends('layouts.quiz_template')

@section('header')
    @include('components.header')
@endsection

@section('title')
    {{$title->name}}
@endsection

@section('contents')
@foreach($questions as $question)
        <div class="quiz_num">
            @component('components.quiz_contents')
                @slot('quiz_num')
                {{$loop->iteration}}
                @endslot
                @slot('image')
                {{$question->image}}
                @endslot
            @endcomponent
            <ul>
                @each('components.quiz_sections', $choices[$loop->index], 'selection')
                {{-- foreach使った方法 --}}
                {{-- @foreach($choices[$loop->index] as $choice)
                    <li class="selections" valid={{$choice->valid}}>{{$choice->choice}}</li>
                @endforeach --}}
            </ul>
            <div class="correct-box">
                <h3 class="judge_answer"></h3>
                <div class="answer">正解は{{$answers[$loop->index]->choice}}です。</div>
            </div>
        </div>
        @endforeach
@endsection
