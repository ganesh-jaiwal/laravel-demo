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
<div class="title" show='demo-1' @click="showDemo">Demo 1</div>
<div id="root-1" class="demo-1 box is-hidden">
	<input type="text" class="input input-test" v-model="message"/>
	<p style="margin-top: 10px;">Value from text-box : @{{ message }}.</p>
</div>
<hr/>
<div class="title" show='demo-2' @click="showDemo">Demo 2</div>
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
@endsection
@section('scripts')
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script type="text/javascript">
	$('.title').each(function () {
	  new Vue({
	    el: this,
	    methods: {
			showDemo(event) {
				let className = $(event.currentTarget).attr('show');
				if ($('.' + className).hasClass('is-hidden')) {
					$('.' + className).removeClass('is-hidden');
				} else {
					$('.' + className).addClass('is-hidden');
				}
			}
		}
	  })
	});
	new Vue({
		el: "#root-1",
		data: {
			message:"Hello World"
		}
	});
	let app = new Vue({
		el: "#root-2",
		data: {
			newName: '',
			names: ['ganesh', 'shantanu', 'amit', 'ramesh', 'harsh'],
			style:'',
			title:'Enter name to add into the list.'
		},
		methods: {
			addName() {
				if (this.newName !== "") {
					this.names.push(this.newName);
					this.newName = '';
				} else {
					this.style="border-color:red";
				}
				this.title = 'Enter name to add into the list.';
			},
			onFocus() {
				this.style="";
			},
			onKeyUp() {
				this.title = 'Click button to add ' + this.newName + ' into the list.';
			}
		}
	});
</script>
@endsection