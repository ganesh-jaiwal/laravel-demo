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
    <p>
        <a href="/projects/{{ $project->id }}/edit">
            Edit
        </a>
    </p>
</div>
@if($project->tasks->count())
<div class="box">
    @foreach($project->tasks as $task)
    <div>
        <form action="/tasks/{{ $task->id }}" method="POST">
            @method('PATCH')
            @csrf
            <label class="checkbox" for="completed">
                <input {{ $task->completed ? 'checked' : '' }} name="completed" onchange="this.form.submit()" type="checkbox">
                    <span class="{{ $task->completed ? 'is-completed' : '' }}">
                        {{ $task->description }}
                    </span>
                </input>
            </label>
        </form>
    </div>
    @endforeach
</div>
@endif
{{-- add a new task form --}}
<form class="box" action="/projects/{{ $project->id }}/tasks" method="POST">
    @csrf
    <div class="field">
        <label for="description" class="label">
            New Task
        </label>
        <div class="control">
            <input type="text" class="input" name="description" placeholder="New Task" required="" />
        </div>
    </div>
    <div class="field">
        <div class="control">
            <button class="button is-link" type="submit">Submit</button>
        </div>
    </div>
    @include('errors')
</form>
@endsection
