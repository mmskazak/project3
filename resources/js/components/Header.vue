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
        <v-navigation-drawer
            v-model="drawer"
            absolute
            left
            temporary
        />
    </v-col>
</template>

<script>
import {DRIVER, PASSENGER} from "../constants";

export default {
    data() {
        return {
            DRIVER: DRIVER,
            PASSENGER: PASSENGER,
            iPassenger: true,
            iDriver: false,
            drawer: false,
            group: null,
        };
    },
    methods: {
        whoIs(whoIs) {
            if (whoIs === this.PASSENGER) {
                this.iPassenger = true;
                this.iDriver = false;
            } else {
                this.iPassenger = false;
                this.iDriver = true;
            }
        }
    },
}
</script>

<style scoped>

</style>
