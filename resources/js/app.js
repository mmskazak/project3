require('./bootstrap');

import Vue from 'vue';
import VueRouter from 'vue-router';
import vuetify from './vuetify';

import App from "./components/App";
import routes from "./routes";

console.log(routes);

Vue.use(VueRouter);


const router = new VueRouter({
    mode: 'history',
    routes
})

const app = new Vue({
    el:'#app',
    components: {App},
    vuetify,
    router,
});

window.vue = app;
