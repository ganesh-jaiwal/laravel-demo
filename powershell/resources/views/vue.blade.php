@extends('layout')

@section('title','Vue Demo')

@section('heading')
<div class="heading">
    <h1>
        Vue Demo
    </h1>
</div>
@endsection|
@section('content')
<hr>
<div class="title" show='demo-1' @click="showDemo">Demo 1 - Dynamic Changes</div>
<div id="root-1" class="demo-1 box is-hidden">
	<input type="text" class="input input-test" v-model="message"/>
	<p style="margin-top: 10px;">Value from text-box : @{{ message }}.</p>
</div>
<hr/>
<div class="title" show='demo-2' @click="showDemo">Demo 2 - Name List</div>
<div id="root-2" class="demo-2 box is-hidden">
	<ul>
		<li v-for="name in names" v-text="name">
		</li>
	</ul>
	<input type="text" @keyup="onKeyUp" @focus="onFocus" class="input input-name" placeholder="Enter Name" v-model="newName" :style = "style"/>
	<p style="margin-top: 10px;">Click button to add this value into the list : "@{{ newName }}"</p>
	<button @click="addName" :title="title" class="button is-link add-name" style="margin-top: 10px;">
		Add Name
	</button>
</div>
<hr/>
<div class="title" show='demo-3' @click="showDemo">Demo 3 - Task</div>
<div id="root-3" class="demo-3 box is-hidden">
	<h5>All Tasks</h5>
	<ul>
		<li v-for="task in tasks" v-text="task.description">
		</li>
	</ul>
	<h5>Incomplete Tasks</h5>
	<ul>
		<li v-for="task in incompleteTasks" v-text="task.description">
		</li>
	</ul>
	{{-- <input type="text" @keyup="onKeyUp" @focus="onFocus" class="input input-name" placeholder="Enter Name" v-model="newName" :style = "style"/> --}}
	{{-- <button @click="addName" :title="title" class="button is-link add-name" style="margin-top: 10px;">
		Add Name
	</button> --}}
</div>
<hr/>
<div class="title" show='demo-4' @click="showDemo">Demo 4 - Component Practice</div>
<div id="root-4" class="demo-4 box is-hidden">
	<task-list></task-list>
</div>
<hr/>
<div class="title" show='demo-5' @click="showDemo">Demo 5 - Component with Message</div>
<div id="root-5" class="demo-5 box is-hidden">
	<message title="Hello World" body="This is the Hello world Message for you."></message>
	<message title="Something Something" body="Bla Bla Bla Bla Bla Bla Bla...."></message>
</div>
<hr/>
<div class="title" show='demo-6' @click="showDemo">Demo 6 - Component with Modal</div>
<div id="root-6" class="demo-6 box is-hidden">
	<modal v-if="showModal" @close="showModal=false">
		<p>
			Here goes the text.
		</p>
	</modal>
	<button class="button is-link" @click="showModal=true">Show Modal</button>
</div>
<hr/>
<div class="title" show='demo-7' @click="showDemo">Demo 7 - Tabs Component</div>
<div id="root-7" class="demo-7 box is-hidden">
	<tabs>
		<tab name="About Us" :selected="true">
			<h1>Here is the content for the about us tab.</h1>
		</tab>
		<tab name="About Us 1">
			<h1>Here is the content for the about us 1 tab.</h1>
		</tab>
		<tab name="About Us 2">
			<h1>Here is the content for the about us 2 tab.</h1>
		</tab>
		<tab name="About Us 3">
			<h1>Here is the content for the about us 3 tab.</h1>
		</tab>
	</tabs>
</div>
@endsection
@section('scripts')
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script type="text/javascript" src="{!! asset('/js/vueDemo.js') !!}"></script>
<script type="text/javascript" src="{!! asset('/js/components/cpmponentPractice.js') !!}"></script>
<script type="text/javascript" src="{!! asset('/js/components/componentMessagePanel.js') !!}"></script>
<script type="text/javascript" src="{!! asset('/js/components/componentModalPanel.js') !!}"></script>
<script type="text/javascript" src="{!! asset('/js/components/componentTabs.js') !!}"></script>
@endsection