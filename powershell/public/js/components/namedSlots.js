window.Event = new Vue();

Vue.component('namedslotmodal', {
	template: `
		<div class="modal is-active">
		  <div class="modal-background"></div>
		  <div class="modal-card">
		    <header class="modal-card-head">
		      <p class="modal-card-title" style="margin-bottom:0px;">
		      	<slot name="heading"></slot>
		      </p>
		      <button class="delete" aria-label="close" @click="closeModal"></button>
		    </header>
		    <section class="modal-card-body">
		      <slot></slot>
		    </section>
		    <footer class="modal-card-foot">
		      <slot name="footer-data">
		      	<button class="button is-primary" @click="closeModal">Okay</button>
		      </slot>
		    </footer>
		  </div>
		</div>
	`,
	methods: {
		closeModal() {
			Event.$emit('closeModal');
		}
	}
});

new Vue({
	el: '#root-9',
	data: {
		showModal: false
	},
	created() {
		Event.$on('closeModal', () => {
			this.showModal = false;
		});
	},
	methods: {
		closeModal() {
			this.showModal = false;
		},
		saveChanges() {
			alert("Changes Saved");
		}
	}
});