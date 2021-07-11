@extends('layouts.app')

@section('content')
    <h2>Список новостей</h2>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">title</th>
            <th scope="col">preview_text</th>
            <th scope="col">published_at</th>
        </tr>
        </thead>
        <tbody>
        @foreach($news as  $item)
            @php
                $image = '';
                if (!empty($item->preview_picture)){
                    $image = $item->preview_picture;
                }else
                    $image ='no_image.jpg';
            @endphp
            <tr>
                <td><a href="{{route('news.show', $item->id)}}">{{$item['title']}}</a></td>
                <a href="{{route('news.show', $item->id)}}"> <img src="/public/img/{{$image}}" alt="{{$item->title}}"></a>
                <td>{{$item['preview_text']}}</td>
                <td>{{$item['published_at']}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
