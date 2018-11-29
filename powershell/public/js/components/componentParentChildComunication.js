Vue.component('coupon', {
	template: `
		<input class='input' type='text' @blur='onCouponApplied' placeholder='Enter Coupon Code'/>
	`,
	methods: {
		onCouponApplied(event) {
			this.coupon = $(event.target).val();
			this.$emit('couponapplied', this.coupon);
		}
	},
	data() {
		return {
			coupon: ''
		}
	}
});
new Vue({
	el: '#root-8',
	data:{
		showMessage: false,
		coupon: ''
	},
	methods: {
		onCouponApplied(couponCode) {
			this.coupon = couponCode;
			this.showMessage = true;
		}
	}
})