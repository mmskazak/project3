require('./bootstrap');

import Vue from 'vue';
import VueRouter from 'vue-router';
import vuetify from './vuetify';

import App from "./components/App";
import Home from "./components/Home";
import CreateTrip from "./components/CreateTrip";

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
            path: '/create-trip',
            name:'create-trip',
            component: CreateTrip
        },
    ],
})

const app = new Vue({
    el:'#app',
    components: {App},
    vuetify,
    router,
});

window.vue = app;
