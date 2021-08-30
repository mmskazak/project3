<template>
    <v-app>
        <v-main>
            <v-container>
                <div>
                    <Header/>
                </div>
                <div>
                    <router-view></router-view>
                </div>
            </v-container>
        </v-main>
    </v-app>

</template>

<script>
import Header from "./Header";

export default {
    name: "App",
    components: {Header},
    comments: {Header},
}
</script>

<style scoped>

</style>
