require('./bootstrap');

import Vue from 'vue';
import VueRouter from 'vue-router';
import router from './router';

// window.Vue = Vue;
window.Vue = require("vue").default;
Vue.use(VueRouter);

const app = new Vue({
    el: '#app',
    router
});
