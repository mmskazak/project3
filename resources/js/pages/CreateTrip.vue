<template>
    <v-container>
        <v-row>
            <v-col>
                <h1>Create Trip</h1>
                <v-form>
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
                        >Создать поездку
                        </v-btn>
                    </v-row>
                </v-form>
            </v-col>
        </v-row>
    </v-container>
</template>

<script>
import ChooseDate from "../components/ChooseDate";
import ChooseTime from "../components/ChooseTime";
import CostTrip from "../components/CostTrip";

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
