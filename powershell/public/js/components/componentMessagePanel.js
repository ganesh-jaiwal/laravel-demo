Vue.component('message', {
	props: ['title', 'body'],
	data() {
		return {
			isVisible: true
		}
	},
	template: `
	<article class="message" v-show="isVisible">
	  <div class="message-header">
	    {{ title }}
	    <button class="delete" @click="isVisible = false" aria-label="delete"></button>
	  </div>
	  <div class="message-body">
	    {{ body }}
	  </div>
	</article>
	`
});

new Vue({
	el: '#root-5'
});