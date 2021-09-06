require('./bootstrap');

import Vue from 'vue';
import Vuex from 'vuex'
import VueRouter from 'vue-router';
import vuetify from './vuetify';

import App from "./pages/App";
import routes from "./routes";

console.log(routes);


Vue.use(Vuex)
Vue.use(VueRouter);

//modules
import a_module from "./modules/a-module";
import b_module from "./modules/b-module";

const store = new Vuex.Store({
    modules: {
        a_module,
        b_module
    }
})


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
