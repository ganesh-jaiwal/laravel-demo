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
    @csrf()
    <div>
        <input class="input {{ $errors->has('name') ? 'is-danger' : '' }}" name="name" placeholder="Name of the Project" required="" type="text" value="{{ old('name') }}">
        </input>
    </div>
    <br/>
    <div>
        <textarea class="textarea {{ $errors->has('discription') ? 'is-danger' : '' }}" name="discription" placeholder="Description of the project" required="">
            {{ old('discription') }}
        </textarea>
    </div>
    <br/>
    <button class="button is-link" type="submit">
        Create Project
    </button>
    @if($errors->any())
    <div style="height: 10px;">
    </div>
    <div class="notification is-danger">
        <ul style="margin-top: 5px;">
            @foreach($errors->all() as $error)
            <li>
                {{ $error }}
            </li>
            @endforeach
        </ul>
    </div>
    @endif
</form>
@endsection
