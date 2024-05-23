<template>
    <AppLayout>
        <div class="bg-[#F4F4F4]">
            <div class="container mx-auto py-12 px-4 md:px-0">
                <div class="grid grid-cols-12 gap-10">
                    <div class="md:col-span-1"></div>
                    <!-- Filter Column -->
                    <div
                        class="col-span-12 md:col-span-3 hidden md:block p-4 rounded-md mt-[100px]"
                    >
                        <div
                            class="max-w-sm mx-auto bg-white shadow-md rounded-lg overflow-hidden h-[2150px]"
                        >
                            <div class="px-4 py-2 bg-white">
                                <h2 class="text-xl font-bold">Brands</h2>
                            </div>

                            <div class="flex items-center">
                                <span
                                    class="w-full border-t border-dotted border-blue-dark"
                                ></span>
                            </div>

                            <div class="px-4 py-2">
                                <div
                                    class="font-sans text-black bg-white flex items-center justify-center my-3"
                                >
                                    <div
                                        class="border rounded overflow-hidden flex"
                                    >
                                        <input
                                            type="text"
                                            class="px-4 py-2"
                                            placeholder="Search..."
                                        />
                                        <button
                                            class="flex items-center justify-center px-4 border-l"
                                        >
                                            <svg
                                                class="h-4 w-4 text-grey-dark"
                                                fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24"
                                            >
                                                <path
                                                    d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"
                                                />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="">
                                <div class="container px-5 mx-auto">
                                    <div
                                        class="scroll-container divide-y overflow-auto h-[2000px]"
                                    >
                                        <div
                                            v-for="brand in brands"
                                            :key="brand.id"
                                            class="flex items-start space-x-3 py-6"
                                        >
                                            <input
                                                type="checkbox"
                                                class="border-gray-300 rounded h-3 w-3"
                                            />

                                            <div class="flex flex-col">
                                                <h1
                                                    class="text-gray-700 jost-300 leading-none"
                                                >
                                                    {{ brand.name }}
                                                </h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Column -->
                    <div class="col-span-12 md:col-span-7">
                        <div class="container mx-auto py-12 px-4 md:px-0">
                            <h1 class="text-4xl font-semibold mb-8 text-center">
                                Perfumes
                            </h1>
                            <div
                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8"
                            >
                                <div
                                    v-for="decant in decants.data"
                                    :key="decant.id"
                                    class="bg-white rounded-lg shadow-md overflow-hidden"
                                >
                                    <img
                                        :src="decant.img_url"
                                        alt="Perfume Image"
                                        class="w-full h-48 object-cover"
                                    />
                                    <div class="p-4">
                                        <h2 class="text-xl font-semibold">
                                            {{ decant.name }}
                                        </h2>
                                        <p class="text-gray-600">
                                            20000 - 30000 MMK
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Paginator -->
                        <!-- <div class="mt-6">
                            <Component
                                :is="link.url ? 'Link' : 'span'"
                                :key="link.url"
                                v-for="link in decants.links"
                                :href="link.url"
                                v-html="link.label"
                                class="px-1"
                                :class="link.url ? '' : 'text-gray-500'"
                            />
                        </div> -->
                        <div class="mt-6 flex justify-center">
                            <template v-for="link in decants.links">
                                <template v-if="link.url">
                                    <Link
                                        class="paginator-link"
                                        :key="link.url"
                                        :href="link.url"
                                        v-html="link.label"
                                    />
                                </template>
                                <template v-else>
                                    <span
                                        class="paginator-label"
                                        :key="link.url"
                                        v-html="link.label"
                                    ></span>
                                </template>
                            </template>
                        </div>
                    </div>
                    <div class="md:col-span-1"></div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import AppLayout from "../../Layouts/AppLayout.vue";

defineProps({ decants: Object, brands: Array });
components: {
    AppLayout;
}
</script>

<style scoped>
.aspect-w-16 {
    position: relative;
    width: 100%;
    padding-bottom: 56.25%; /* 16:9 aspect ratio */
}

.aspect-h-9 {
    height: 0;
}

.aspect-w-16 iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

@media (max-width: 767px) {
    .lg\:col-span-2 {
        display: none;
    }
}

.paginator-link {
    display: inline-block;
    padding: 8px 12px;
    margin-right: 8px;
    background-color: #f0f0f0; /* Creamy or light gray background */
    color: #333333;
    text-decoration: none;
    border-radius: 4px;
    transition: background-color 0.3s;
}

.paginator-link:hover {
    background-color: #e0e0e0; /* Darker creamy or light gray on hover */
}

.paginator-label {
    display: inline-block;
    padding: 8px 12px;
    margin-right: 8px;
    background-color: #ffffff; /* White background */
    color: #333333;
    border-radius: 4px;
}

.scroll-container {
    /* Add overflow settings for scrolling */
    overflow: auto;
    height: 2000px;
}

/* Hide scrollbar for Chrome, Safari and Opera */
.scroll-container::-webkit-scrollbar {
    display: none;
}

/* Hide scrollbar for IE, Edge and Firefox */
.scroll-container {
    -ms-overflow-style: none; /* IE and Edge */
    scrollbar-width: none; /* Firefox */
}
</style>
