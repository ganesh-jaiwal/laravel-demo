@extends('layout')

@section('title','Projects')

@section('heading')
<div class="heading">
    <h1>
        Create New Project.
    </h1>
</div>
@endsection

@section('content')
<form action="/projects" method="POST">
    {{ csrf_field() }}
    <div>
        <input name="name" placeholder="Name of the Project" type="text">
        </input>
    </div>
    <div>
        <textarea name="discription" placeholder="Description of the project">
        </textarea>
    </div>
    <button type="submit">
        Create Project
    </button>
</form>
@endsection
