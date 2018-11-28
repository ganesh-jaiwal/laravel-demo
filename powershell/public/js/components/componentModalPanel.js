Vue.component('modal', {
	template: `
	<div class="modal is-active">
	  <div class="modal-background"></div>
	  <div class="modal-content box">
	    <slot></slot>
	  </div>
	  <button class="modal-close is-large" @click="$emit('close')" aria-label="close"></button>
	</div>
	`
});

new Vue({
	el: '#root-6',
	data: {
		showModal: false
	}
});