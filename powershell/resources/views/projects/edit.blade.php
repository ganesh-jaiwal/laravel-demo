@extends('layout')

@section('title','Edit Project')

@section('heading')
<div class="heading">
    <h1>
        Edit Project
    </h1>
</div>
@endsection

@section('content')
<form action="/projects/{{$project->id}}" method="POST">
    @method('PATCH')
	@csrf()
    <div class="field">
        <label class="label" for="name">
            Name
        </label>
        <div class="control">
            <input class="input" name="name" placeholder="Title" readonly="" type="text" value="{{$project->name}}">
            </input>
        </div>
    </div>
    <div class="field">
        <label class="label" for="discription">
            Description
        </label>
        <div class="control">
            <textarea class="textarea" name="discription" placeholder="Name of projetc" readonly="" value="{{$project->discription}}">
                {{$project->discription}}
            </textarea>
        </div>
    </div>
    <div class="field">
        <div class="control">
            <button class="button is-link" type="submit">
                Update Project
            </button>
        </div>
    </div>
</form>
<form action="/projects/{{$project->id}}" method="POST">
    @method('DELETE')
	@csrf()
    <div class="field">
        <div class="control">
            <button class="button" type="submit">
                Delete Project
            </button>
        </div>
    </div>
</form>
@endsection
