require('./bootstrap');

import Vue from 'vue';

Vue.component('table-component', require('./components/TableComponent.vue').default);

const app = new Vue({
	el: '#app'
});