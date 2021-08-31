<template>
    <v-navigation-drawer
        v-model="drawer"
        absolute
        bottom
        temporary
    >
        <v-list
            nav
            dense
        >
            <v-list-item-group
                v-model="group"
                active-class="deep-purple--text text--accent-4"
            >
                <v-list-item :to="{name:'home'}" exact>
                    <v-list-item-title>Home</v-list-item-title>
                </v-list-item>

                <v-list-item :to="{name:'to-moscow'}">
                    <v-list-item-title>to Moscow</v-list-item-title>
                </v-list-item>

                <v-list-item :to="{name:'to-serpukhov'}">
                    <v-list-item-title>to Serpukhov</v-list-item-title>
                </v-list-item>

                <v-list-item :to="{name:'create-trip'}">
                    <v-list-item-title>Create trip</v-list-item-title>
                </v-list-item>

                <v-list-item :to="{name:'about'}">
                    <v-list-item-title>About</v-list-item-title>
                </v-list-item>
            </v-list-item-group>
        </v-list>
    </v-navigation-drawer>
</template>

<script>
export default {
    data: () => ({
        drawer: false,
        group: null,
    }),
    watch: {
        group() {
            this.drawer = false;
        },
        leftMenu() {
            this.drawer = this.leftMenu;
        },
        drawer() {
            this.$emit('menu-status', this.drawer);
        },
    },
    props: {
        leftMenu: {
            required: true,
            type: Boolean,
        }
    },
}
</script>

<style scoped>

</style>
