@extends('layouts.app')

@section('content')
    <h2>Вы попали на новость {{$news->title}}</h2>
    <h3>Detail text: {{$news->content}}</h3>
    @if(empty($news->preview_picture))
        <H3>Пока что фотография не выставлена :(</H3>
    @endif

@endsection
