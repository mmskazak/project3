require('./bootstrap');

import Vue from 'vue';
import VueRouter from 'vue-router';
import vuetify from './vuetify';

import App from "./components/App";
import Home from "./components/Home";
import About from "./components/About";

Vue.use(VueRouter);


const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name:'home',
            component: Home
        },
        {
            path: '/about',
            name:'about',
            component: About
        }
    ],
})

const app = new Vue({
    el:'#app',
    components: {App},
    vuetify,
    router,
});

window.vue = app;
