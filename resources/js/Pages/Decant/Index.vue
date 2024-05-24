<template>
    <AppLayout>
        <div class="bg-[#F4F4F4]">
            <div class="container mx-auto py-12 px-4 md:px-0">
                <div class="grid grid-cols-12">
                    <div class="md:col-span-1"></div>
                    <!-- Filter Column -->
                    <div
                        class="col-span-12 md:col-span-3 hidden md:block p-4 rounded-md mt-[100px]"
                    >
                        <div
                            class="max-w-sm mx-auto bg-white shadow-md rounded-lg overflow-hidden max-h-[2150px] custom-scrollbar"
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
                                            v-model="brandSearch"
                                        />
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="container px-5 mx-auto">
                                    <div
                                        class="scroll-container divide-y overflow-auto h-auto"
                                    >
                                        <div
                                            v-for="brand in filteredBrands"
                                            :key="brand.id"
                                            class="flex items-start space-x-3 py-6 cursor-pointer"
                                            @click="filterByBrand(brand)"
                                        >
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
                            <div class="md:flex justify-between">
                                <h1
                                    class="text-4xl font-semibold mb-5 text-center cormorant-garamond-regular"
                                >
                                    Decants
                                </h1>
                                <div
                                    class="flex w-full max-w-lg md:justify-end justify-center mb-5"
                                >
                                    <input
                                        type="text"
                                        v-model="search"
                                        placeholder="Search..."
                                        class="p-2 rounded border border-gray-300 h-[42px] w-[70%] focus:outline-none text-black"
                                    />
                                </div>
                            </div>

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
import { Link } from "@inertiajs/inertia-vue3";
import { ref, watch, computed } from "vue";

import AppLayout from "../../Layouts/AppLayout.vue";
import { Inertia } from "@inertiajs/inertia";

const props = defineProps({
    decants: Object,
    brands: Array,
});

let search = ref("");
const selectedBrand = ref("");
let brandSearch = ref("");

const filterByBrand = (brand) => {
    selectedBrand.value = brand.name;
    updateDecants();
};
//make a computed property to filter brands based on brandSearch. Original brand data is come from props
const filteredBrands = computed(() => {
    return props.brands.filter((brand) =>
        brand.name.toLowerCase().includes(brandSearch.value.toLowerCase())
    );
});
const filteredDecants = computed(() => {
    if (selectedBrand.value) {
        return decants.filter(
            (decant) => decant.brand.name === selectedBrand.value
        );
    }
    return decants;
});

const updateDecants = () => {
    Inertia.get(
        "/products/decants",
        { search: search.value, brand: selectedBrand.value },
        {
            preserveState: true,
        }
    );
};

watch(search, () => {
    updateDecants();
});
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

.custom-scrollbar {
    max-height: 2150px;
    overflow-y: auto;
}

.custom-scrollbar::-webkit-scrollbar {
    width: 0px; /* Remove scrollbar space */
    background: transparent; /* Optional: just to make sure */
}

.custom-scrollbar {
    -ms-overflow-style: none; /* Internet Explorer 10+ */
    scrollbar-width: none; /* Firefox */
}

.custom-scrollbar::-webkit-scrollbar {
    display: none; /* Safari and Chrome */
}
</style>
