@extends('layout')

@section('title','Projects')

@section('heading')
<div class="heading">
    <h1>
        Projects
    </h1>
</div>
@endsection

@section('content')
<ul style="list-style-type:none;">
    @foreach($projects as $project)
    <li>
        {{ $project->id }} . {{ $project->name }} => {{ $project->discription }}
    </li>
    @endforeach
</ul>
<button class="button is-link" onclick="window.location='/projects/create';" type="submit">
    Create Project
</button>
<button class="button is-link" onclick="showEditProjectField" type="submit">
    Edit Project
</button>
<div class="field edit-proj-show" hidden="">
    <label class="label" for="project-id">
        Enter project ID to Edit
    </label>
    <input class="input" name="projecrt-id" type="text"/>
</div>
@endsection
