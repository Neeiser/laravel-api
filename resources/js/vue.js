require('./bootstrap');

window.Vue = require('vue');
window.Axios = require('axios');

import App from './views/App.vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

/* const router = new VueRouter() */

const app = new Vue({
    el: '#app',
    render: h =>h(App),
});