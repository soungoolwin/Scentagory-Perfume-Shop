<template>
    <app-layout>
        <template #default>
            <hero />
        </template>
    </app-layout>
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
