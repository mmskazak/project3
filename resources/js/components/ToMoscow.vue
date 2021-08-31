<template>
    <div>
        <v-row>
            <v-col cols="12">
                <v-checkbox
                    v-model="today"
                    label="Today"
                    color="info"
                    hide-details
                ></v-checkbox>
                <v-checkbox
                    v-model="tomorrow"
                    label="Tomorrow"
                    color="info"
                    hide-details
                ></v-checkbox>
            </v-col>
        </v-row>

        <h1>Trips to Moscow</h1>

        <v-data-table
            dense
            :headers="headers"
            :items="trips"
            item-key="name"
            class="elevation-1 mt-5"
        >
        </v-data-table>
    </div>
</template>

<script>
export default {
    data: () => ({
        today:true,
        tomorrow:true,
        trips: [],
        headers: [
            {text: 'Направление', value: 'direction', width: "15%"},
            {text: 'Дата поездки', value: 'date_time', width: "10%"},
            {text: 'Время поездки', value: 'date_time', width: "10%"},
            {text: 'Описание', value: 'description', width: "50%"},
            {text: 'Мест', value: 'passenger_seats', width: "5%"},
            {text: 'Занято', value: 'busy', width: "5%"},
            {text: 'Водитель', value: 'user_id', width: "5%"},
        ],
    }),
    mounted() {
        this.loadTripsToMoscow();
    },
    methods: {
        async loadTripsToMoscow() {
            const {data} = await axios.get('api/trips/to/moscow');
            this.trips = data
        },
    },
}
</script>

<style scoped>

</style>
