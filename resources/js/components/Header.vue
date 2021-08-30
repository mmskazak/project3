<template>
    <v-app-bar
        color="#6A76AB"
        dark
        shrink-on-scroll
        prominent
        src="https://picsum.photos/1920/1080?random"
        fade-img-on-scroll
        scroll-target="#scrolling-techniques-3"
    >
        <template v-slot:img="{ props }">
            <v-img
                v-bind="props"
                gradient="to top right, rgba(100,115,201,.7), rgba(25,32,72,.7)"
            ></v-img>
        </template>

        <v-app-bar-nav-icon></v-app-bar-nav-icon>

        <v-app-bar-title>Москва - Серпухов</v-app-bar-title>

        <v-spacer></v-spacer>

        <v-btn icon>
            <v-icon>mdi-magnify</v-icon>
        </v-btn>

        <v-btn icon>
            <v-icon>mdi-heart</v-icon>
        </v-btn>

        <v-btn icon>
            <v-icon>mdi-dots-vertical</v-icon>
        </v-btn>

        <template v-slot:extension>
            <v-tabs align-with-title>
                <v-tab :to="{name:'home'}">в Москву</v-tab>
                <v-tab :to="{name:'home'}">в Серпухов</v-tab>
                <v-tab :to="{name:'create-trip'}">Мои поездки</v-tab>
                <v-tab :to="{name:'create-trip'}">Создать поездку</v-tab>
            </v-tabs>
        </template>
    </v-app-bar>
</template>

<script>
export default {
    name: "Header.vue"
}
</script>

<style scoped>

</style>
