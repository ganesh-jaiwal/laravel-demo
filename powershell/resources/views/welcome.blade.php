@extends('layout')

@section('title', 'Contact Us')

@section('content')
<!-- <div class="content"> -->
<div class="title m-b-md">
    Laravel With {{ $foo }}
</div>
<ul>
    @foreach($tasks as $task)
    <li>
        {{ $task }}
    </li>
    @endforeach
</ul>
<div class="links">
    <a href="https://laravel.com/docs">
        Documentation
    </a>
    <a href="https://laracasts.com">
        Laracasts
    </a>
    <a href="https://laravel-news.com">
        News
    </a>
    <a href="https://nova.laravel.com">
        Nova
    </a>
    <a href="https://forge.laravel.com">
        Forge
    </a>
    <a href="https://github.com/laravel/laravel">
        GitHub
    </a>
</div>
@endsection
