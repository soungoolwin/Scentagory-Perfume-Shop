<template>
    <div>
        <Navigation />
        <main>
            <slot></slot>
        </main>
        <Footer></Footer>
    </div>
</template>

<script>
import Footer from "../Components/Footer.vue";
import Navigation from "../Components/Navigation.vue";
export default {
    components: {
        Footer,
        Navigation,
    },
    data() {
        return {
            isMenuOpen: false,
        };
    },
    methods: {
        toggleMenu() {
            this.isMenuOpen = !this.isMenuOpen;
        },
    },
};
</script>

<style scoped>
.cursor-pointer {
    cursor: pointer;
}
</style>
