<template>
    <AppLayout>
        <!-- <div class="container mx-auto py-12 px-4 md:px-0">
            <div class="flex items-center justify-between mb-6">
                <h1 class="text-4xl font-semibold cormorant-garamond-regular">
                    Decants
                </h1>
                <div>
                    <label for="sort" class="sr-only">Sort by</label>
                    <select id="sort" name="sort" class="form-select">
                        <option>Sort by popularity</option>
                        <option>Sort by price: low to high</option>
                        <option>Sort by price: high to low</option>
                    </select>
                </div>
            </div>

        </div> -->
        <div class="bg-[#F4F4F4]">
            <div class="container mx-auto py-12 px-4 md:px-0">
                <div class="grid grid-cols-12 gap-10">
                    <div class="md:col-span-1"></div>
                    <div
                        class="col-span-12 md:col-span-3 hidden md:block bg-[#FFFFFF] p-4 rounded-md"
                    >
                        <div
                            class="max-w-sm mx-auto bg-white shadow-md rounded-lg overflow-hidden"
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
                                <p>Category</p>
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
                                        class="divide-y overflow-auto h-[300px]"
                                    >
                                        <div
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
                                                    Antibiotic
                                                </h1>
                                            </div>
                                        </div>

                                        <div
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
                                                    Baby Care
                                                </h1>
                                            </div>
                                        </div>

                                        <div
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
                                                    Cold and Fever
                                                </h1>
                                            </div>
                                        </div>

                                        <div
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
                                                    Face
                                                </h1>
                                            </div>
                                        </div>

                                        <div
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
                                                    Hair
                                                </h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-7">
                        <div class="container mx-auto py-12 px-4 md:px-0">
                            <h1 class="text-4xl font-semibold mb-8 text-center">
                                Perfumes
                            </h1>
                            <div
                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8"
                            >
                                <div
                                    v-for="perfume in perfumes"
                                    :key="perfume.id"
                                    class="bg-white rounded-lg shadow-md overflow-hidden"
                                >
                                    <img
                                        :src="Perfume"
                                        alt="Perfume Image"
                                        class="w-full h-48 object-cover"
                                    />
                                    <div class="p-4">
                                        <h2 class="text-xl font-semibold">
                                            {{ perfume.name }}
                                        </h2>
                                        <p class="text-gray-600">
                                            {{ perfume.price_range }}
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
import AppLayout from "../../Layouts/AppLayout.vue";
import Perfume from "../../../../public/images/story.jpg";

export default {
    components: { AppLayout },
    props: {
        videos: {
            type: Array,
            required: true,
        },
    },
    data() {
        return {
            Perfume,
            perfumes: [
                {
                    id: 1,
                    name: "Perfume A",
                    image: "/images/perfume-a.jpg",
                    price_range: "$50 - $70",
                },
                {
                    id: 2,
                    name: "Perfume B",
                    image: "/images/perfume-b.jpg",
                    price_range: "$80 - $100",
                },
                {
                    id: 3,
                    name: "Perfume C",
                    image: "/images/perfume-c.jpg",
                    price_range: "$60 - $90",
                },
                {
                    id: 4,
                    name: "Perfume D",
                    image: "/images/perfume-d.jpg",
                    price_range: "$40 - $60",
                },
                {
                    id: 5,
                    name: "Perfume E",
                    image: "/images/perfume-e.jpg",
                    price_range: "$70 - $110",
                },
                {
                    id: 6,
                    name: "Perfume F",
                    image: "/images/perfume-f.jpg",
                    price_range: "$55 - $75",
                },
                {
                    id: 7,
                    name: "Perfume G",
                    image: "/images/perfume-g.jpg",
                    price_range: "$65 - $85",
                },
                {
                    id: 8,
                    name: "Perfume H",
                    image: "/images/perfume-h.jpg",
                    price_range: "$50 - $70",
                },
            ],
        };
    },
};
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
</style>
