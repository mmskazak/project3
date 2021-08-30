<template>
    <v-col
        cols="6"
    >
        <v-dialog
            ref="dialog"
            v-model="modal2"
            :return-value.sync="time"
            persistent
            width="290px"
        >
            <template v-slot:activator="{ on, attrs }">
                <v-text-field
                    v-model="time"
                    label="Выберите время поездки"
                    prepend-icon="mdi-clock-time-four-outline"
                    readonly
                    v-bind="attrs"
                    v-on="on"
                ></v-text-field>
            </template>
            <v-time-picker
                v-if="modal2"
                full-width
                v-model="e7"
                format="24hr"
            >
                <v-spacer></v-spacer>
                <v-btn
                    text
                    color="primary"
                    @click="modal2 = false"
                >
                    Cancel
                </v-btn>
                <v-btn
                    text
                    color="primary"
                    @click="$refs.dialog.save(time)"
                >
                    OK
                </v-btn>
            </v-time-picker>
        </v-dialog>
    </v-col>
</template>

<script>
export default {
    data() {
        return {
            time: null,
            modal2: false,
            e7: null,
        }
    },
}
</script>

<style scoped>

</style>
