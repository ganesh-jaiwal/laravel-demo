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
let app2 = new Vue({
	el: "#root-3",
	data: {
		tasks: [
			{
				description: 'Taks 1',
				completed: false
			},
			{
				description: 'Taks 2',
				completed: true
			},
			{
				description: 'Taks 3',
				completed: false
			},
			{
				description: 'Taks 4',
				completed: true
			},
			{
				description: 'Taks 5',
				completed: false
			},
			{
				description: 'Taks 6',
				completed: false
			},
		]
	},
	computed: {
		incompleteTasks() {
			return this.tasks.filter(task => ! task.completed);
		}
	}
});