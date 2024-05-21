<template>
    <AppLayout>
        <template #default>
            <hero />
        </template>
    </AppLayout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import Hero from "../Components/Hero.vue";

export default {
    props: {},
    components: {
        AppLayout,
        Hero,
    },
};
</script>
