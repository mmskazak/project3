<template>
    <v-container>
        <v-row>
            <v-col>
                <div>
                    <h1>Trips to Serpukhov</h1>

                    <v-data-table
                        dense
                        :headers="headers"
                        :items="trips"
                        item-key="name"
                        class="elevation-1 mt-5"
                    ></v-data-table>
                </div>
            </v-col>
        </v-row>
    </v-container>
</template>

<script>
export default {
    data: () => ({
        trips: [],
        headers: [
            {text: 'direction', value: 'direction'},
            {text: 'Дата поездки', value: 'date_time'},
            {text: 'Описание', value: 'description'},
            {text: 'Мест', value: 'passenger_seats'},
            {text: 'Занято', value: 'busy'},
            {text: 'Водитель', value: 'user_id'},
        ],
    }),
    mounted() {
        this.loadTripsToMoscow();
    },
    methods: {
        async loadTripsToMoscow() {
            const {data} = await axios.get('api/trips/to/serpukhov');
            this.trips = data
        },
    },
}
</script>

<style scoped>

</style>

