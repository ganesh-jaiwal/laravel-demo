@extends('layout')

@section('title','Edit Project')

@section('heading')
<div class="heading">
    <h1>
        Project Details
    </h1>
</div>
@endsection

@section('content')
<br/>
<div class="title">
    {{ $project->name }}
</div>
<div class="content" style="margin-left: 0px;">
    {{ $project->discription }}
</div>
<p>
    <a href="/projects/{{ $project->id }}/edit">
        Edit
    </a>
</p>
@endsection
