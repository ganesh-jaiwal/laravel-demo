@extends('layout')

@section('title','Projects')

@section('content')
	Projects
<ul>
    @foreach($projects as $project)
    <li>
        {{ $project->name }} => {{ $project->discription }}
    </li>
    @endforeach
</ul>
@endsection
