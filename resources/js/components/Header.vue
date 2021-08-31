<template>
    <v-col class="font-weight-bold white--text">
        <v-app-bar app
                   color="#6A76AB"
                   dark
        >
            <template v-slot:img="{ props }">
                <v-img
                    v-bind="props"
                    gradient="to top right, rgba(100,115,201,.7), rgba(25,32,72,.7)"
                ></v-img>
            </template>

            <v-app-bar-nav-icon @click="$emit('drawer')"></v-app-bar-nav-icon>

            <v-app-bar-title>Trips</v-app-bar-title>

            <v-spacer></v-spacer>

            <v-btn text>
                Sing in
            </v-btn>

            <v-btn text>
                Register
            </v-btn>
        </v-app-bar>
    </v-col>
</template>

<script>

export default {

}
</script>

<style scoped>

</style>
