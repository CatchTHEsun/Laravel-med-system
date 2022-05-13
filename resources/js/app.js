require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import Vue from 'vue';

Vue.component('hospitals', require('./components/Hospitals.vue').default);

const app = new Vue({
    el: "#app"
});