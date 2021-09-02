<template>
    <v-app>
        <Drawer :left-menu="isShowLeftMenu" @menu-status="menuIsOpenOrClose"/>
        <Header @drawer="showMenu()"/>
        <v-main>
            <router-view></router-view>
        </v-main>
        <Footer/>
    </v-app>
</template>

<script>
import Header from "../components/Header";
import Footer from "../components/Footer";
import Drawer from "../components/Drawer";

export default {
    name: "App",
    components: {Header, Footer, Drawer},
    comments: {Header},
    data() {
        return {
            drawer: false,
        }
    },
    computed: {
        isShowLeftMenu() {
            return this.drawer;
        },
    },
    methods: {
        showMenu() {
            this.drawer = true;
        },
        menuIsOpenOrClose(drawer) {
            this.drawer = drawer;
        },
        async goSanctum() {
             await axios.get('sanctum/csrf-cookie');
        }
    },
    mounted() {
        this.goSanctum();
    },
}
</script>

<style scoped>

</style>
