@extends('layouts.app')

@section('title', 'Главная')

@section('content')


<table class="table table-striped table-borderless">
    <thead>
        <tr>
            <th>Наименование</th>
            <th>Рубрика</th>
            <th>Информация</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            <td>
                <h4>{{$post->title}}</h4>
            </td>
            <td>{{$post->post_ext_attributes[0]->rubric}}</td>
            <td>{{$post->content}}</td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection('content')