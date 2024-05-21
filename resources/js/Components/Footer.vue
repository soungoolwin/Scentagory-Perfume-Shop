<template>
    <footer class="bg-[#290E11] text-white py-8">
        <div
            class="container mx-auto grid grid-cols-1 md:grid-cols-12 gap-5 px-5 md:px-0"
        >
            <!-- First Column: Logo and Social Links -->
            <div class="col-span-4 mx-auto my-auto">
                <img
                    :src="Logo"
                    alt="Scentagory Logo"
                    class="w-[100px] h-[100px]"
                />
                <div class="text-xl font-bold mb-4">Scentagory</div>
                <div class="flex space-x-4 mb-4">
                    <a
                        href="https://www.facebook.com/Scentagory"
                        class="hover:underline"
                    >
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="#" class="hover:underline">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                    <a href="#" class="hover:underline">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="#" class="hover:underline">
                        <i class="fa-solid fa-location-dot"></i>
                    </a>
                </div>
            </div>

            <!-- Second Column: Navigation Links -->
            <div class="col-span-4 mx-auto my-auto">
                <h3 class="font-bold mb-4">About Us</h3>
                <ul class="space-y-2">
                    <li>
                        <Link href="/about-us" class="hover:underline"
                            >About Us</Link
                        >
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Products</a>
                    </li>
                </ul>
            </div>

            <!-- Third Column: Contact Information -->
            <div class="col-span-4 mx-auto my-auto">
                <h3 class="font-bold mb-4 text-center">Contact Us</h3>
                <ul class="space-y-2 text-center">
                    <li>
                        <span class="block"
                            >Address: 123 Perfume Lane, Fragrance City, FC
                            12345</span
                        >
                    </li>
                    <li>
                        <span class="block">Phone: (123) 456-7890</span>
                    </li>
                    <li>
                        <span class="block">Email: info@scentagory.com</span>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</template>

<script>
import { Link } from "@inertiajs/vue3";
import Logo from "../../../public/images/logo.png";
export default {
    name: "MyComponent",
    components: {
        Link,
    },
    data() {
        return {
            Logo,
        };
    },
};
</script>

<style scoped>
footer a {
    color: white;
}
footer a:hover {
    text-decoration: underline;
}
</style>
