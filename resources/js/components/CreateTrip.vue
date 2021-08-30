<template>
    <v-form
        class="mt-5"
        ref="form"
        v-model="valid"
        lazy-validation
    >
        <v-textarea
            label="Информация о предстоящей поездке"
        ></v-textarea>
        <v-row>
            <ChooseDate/>
            <ChooseTime/>
        </v-row>
        <v-row>
            <CostTrip/>
        </v-row>
        <v-row>
            <v-btn
                elevation="2"
            >Создать поездку</v-btn>
        </v-row>
    </v-form>
</template>

<script>
import ChooseDate from "./ChooseDate";
import ChooseTime from "./ChooseTime";
import CostTrip from "./CostTrip";

export default {
    components: {
        ChooseDate,
        ChooseTime,
        CostTrip
    },
}
</script>

<style scoped>

</style>
