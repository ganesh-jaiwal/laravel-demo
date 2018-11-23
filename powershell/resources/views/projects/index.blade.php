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
<ul class="ul" style="list-style-type:none;">
    @foreach($projects as $project)
    <a href="/projects/{{ $project->id }}">
        <li class="menu-list">
            {{ $project->id }} . {{ $project->name }} => {{ $project->discription }}
        </li>
    </a>
    @endforeach
</ul>
<button class="button is-link" onclick="window.location='/projects/create';" type="submit">
    Create Project
</button>
<button class="button is-link edit-project-btn" type="submit">
    Edit Project
</button>
<form>
    <div class="field edit-proj-show" hidden="">
        <br/>
        <label class="label" for="project-id">
            Enter project ID to Edit
        </label>
        <input class="input" name="project-id" required="" type="text"/>
        <button class="button is-link open-edit-page" style="margin-top: 10px;" type="submit">
            Edit Project
        </button>
    </div>
</form>
@endsection
@section('scripts')
<script type="text/javascript">
    console.log("good");
    // window.addEventListener('load', function() {
	$('.edit-project-btn').click(function () {
		$(".edit-proj-show").removeAttr('hidden');
	});
	$('.open-edit-page').click(function () {
		var pId = $('input[name="project-id"]').val();
		window.location='/projects/' + pId + '/edit';
	});
	// }, false );
</script>
@endsection
