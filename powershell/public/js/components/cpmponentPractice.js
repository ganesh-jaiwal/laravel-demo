Vue.component('task-list', {
	template: `
	<div>
		<task v-for="task in tasks">{{ task.description }}</task>
	</div>
	`,
	data() {
		return {
			tasks: [{
					description: 'Taks 1',
					completed: false
				}, {
					description: 'Taks 2',
					completed: true
				}, {
					description: 'Taks 3',
					completed: false
				}, {
					description: 'Taks 4',
					completed: true
				}, {
					description: 'Taks 5',
					completed: false
				}, {
					description: 'Taks 6',
					completed: false
				}]
		}
	}
});

Vue.component('task', {
	template: '<li><slot></slot></li>'
});

new Vue({
	el: '#root-4'
});