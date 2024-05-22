<template>
    <AppLayout>
        <h1>Hello</h1>
    </AppLayout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "../Layouts/AppLayout.vue";

export default defineComponent({
    name: "Home",
    components: { AppLayout },
    setup() {
        return {};
    },
});
</script>

<style scoped></style>
