<template>
    <v-app>
        <Drawer :left-menu="isShowLeftMenu" @menu-status="menuIsOpenOrClose"/>
        <Header @drawer="showMenu()"/>
        <v-main>
            <v-container>
                <router-view></router-view>
            </v-container>
        </v-main>
        <Footer/>
    </v-app>
</template>

<script>
import Header from "./Header";
import Footer from "./Footer";
import Drawer from "./Drawer";

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
        }
    },
}
</script>

<style scoped>

</style>
