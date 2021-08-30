<template>
    <div>
        <h1>HOME</h1>
        <ListTrips/>
    </div>
</template>

<script>
import ListTrips from "./ListTrips";

export default {
    components:{
      ListTrips,
    },
    data() {
        return {
            trips: [],
        };
    }
}
</script>

<style scoped>

</style>
