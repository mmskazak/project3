<template>
    <v-app>
        <v-content>
            <v-container>
                <div>
                    <Header/>
                </div>
                <div>
                    <p>
                        <router-link :to="{name:'home'}"> Home </router-link>
                        <router-link :to="{name:'about'}"> About </router-link>
                    </p>
                </div>
                <div>
                    <router-view></router-view>
                </div>

            </v-container>
        </v-content>
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
