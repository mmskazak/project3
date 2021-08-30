<template>
    <v-col
        cols="6"
    >
        <v-dialog
            ref="dialog"
            v-model="modal"
            :return-value.sync="date"
            persistent
            width="290px"
        >
            <template v-slot:activator="{ on, attrs }">
                <v-text-field
                    v-model="date"
                    label="Выберите дату поездки"
                    prepend-icon="mdi-calendar"
                    readonly
                    v-bind="attrs"
                    v-on="on"
                ></v-text-field>
            </template>
            <v-date-picker
                v-model="date"
                scrollable
            >
                <v-spacer></v-spacer>
                <v-btn
                    text
                    color="primary"
                    @click="modal = false"
                >
                    Cancel
                </v-btn>
                <v-btn
                    text
                    color="primary"
                    @click="$refs.dialog.save(date)"
                >
                    OK
                </v-btn>
            </v-date-picker>
        </v-dialog>
    </v-col>
</template>

<script>
export default {
    data: () => ({
        date: null,
        modal: false,

    }),
}
</script>

<style scoped>

</style>
