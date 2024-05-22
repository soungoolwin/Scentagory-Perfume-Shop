<template>
    <AppLayout>
        <div class="bg-[#F4F4F4]">
            <div class="container mx-auto py-12 px-4 md:px-0">
                <div class="grid grid-cols-12 gap-10">
                    <div class="md:col-span-1"></div>
                    <div
                        class="col-span-12 md:col-span-10 bg-[#FFFFFF] rounded-lg"
                    >
                        <div class="container mx-auto py-12 px-4 md:px-0">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <!-- Image Column -->
                                <div class="flex justify-center items-center">
                                    <img
                                        :src="perfumeImage"
                                        alt="Perfume Image"
                                        class="w-[490px] h-[490px] object-cover rounder-lg"
                                    />
                                </div>

                                <!-- Decant Information Column -->
                                <div
                                    class="flex flex-col justify-center space-y-6"
                                >
                                    <h1
                                        class="text-3xl font-semibold cormorant-garamond-regular"
                                    >
                                        {{ perfume.name }}
                                    </h1>
                                    <p class="text-xl text-gray-600">
                                        {{ perfume.price_range }}
                                    </p>

                                    <!-- Size Selector -->
                                    <div class="w-64">
                                        <label
                                            for="countries"
                                            class="block text-sm font-medium text-gray-700"
                                            >Decant Size</label
                                        >
                                        <select
                                            id="countries"
                                            name="countries"
                                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                        >
                                            <option>5 ml</option>
                                            <option>10 ml</option>
                                            <option>30 ml</option>
                                        </select>

                                        <p class="text-xl text-gray-600 mt-5">
                                            10000MMK
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="md:col-span-1"></div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script>
import { ref } from "vue";
import AppLayout from "../../Layouts/AppLayout.vue";

// Import the image directly
import PerfumeImg from "../../../../public/images/story.jpg";
export default {
    components: { AppLayout },
    name: "PerfumeDetail",
    setup() {
        const selectedSize = ref("");
        const perfume = ref({
            id: 1,
            name: "Jean Paul Gauliter(JPG) Ultramale",
            price_range: "19,000 Ks – 100,000 Ks",
            sizes: ["30ml", "50ml", "100ml"],
        });
        const perfumeImage = PerfumeImg;

        return {
            selectedSize,
            perfume,
            perfumeImage,
        };
    },
};
</script>

<style scoped>
/* Add any necessary styles here */
</style>
