<template>
    <AppLayout>
        <div class="container mx-auto py-12 px-4 md:px-0">
            <div class="grid grid-cols-12">
                <div class="col-span-1 lg:col-span-2"></div>
                <!-- Left spacing -->
                <div class="col-span-10 lg:col-span-8">
                    <h1 class="text-4xl font-semibold mb-6">
                        About Scentagory
                    </h1>
                    <p class="mb-8">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Ut elit tellus, luctus nec ullamcorper mattis, pulvinar
                        dapibus leo. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Ut elit tellus, luctus nec ullamcorper
                        mattis, pulvinar dapibus leo. Lorem ipsum dolor sit
                        amet, consectetur adipiscing elit. Ut elit tellus,
                        luctus nec ullamcorper mattis, pulvinar dapibus leo.
                    </p>

                    <div class="grid md:grid-cols-2">
                        <div>
                            <img
                                :src="Story"
                                alt="Perfume Bottle"
                                class="w-[570px] h-[500px] object-cover"
                            />
                        </div>
                        <div
                            class="flex items-center justify-center h-full flex-col"
                        >
                            <h2 class="text-3xl font-semibold mb-4">
                                Our Story
                            </h2>
                            <p class="md:px-[60px] px-[20px]">
                                Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Ut elit tellus, luctus nec
                                ullamcorper mattis, pulvinar dapibus leo. Lorem
                                ipsum dolor sit amet, consectetur adipiscing
                                elit. Ut elit tellus, luctus nec ullamcorper
                                mattis, pulvinar dapibus leo. Lorem ipsum dolor
                                sit amet, consectetur adipiscing elit. Ut elit
                                tellus, luctus nec ullamcorper mattis, pulvinar
                                dapibus leo.
                            </p>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-8 mt-5">
                        <div
                            class="flex items-center justify-center h-full flex-col"
                        >
                            <h2 class="text-3xl font-semibold mb-4">
                                Our Vision
                            </h2>
                            <p class="md:px-[60px] px-[20px]">
                                To open numerous spacious and well-equipped
                                stores where customers can comfortably sample
                                fragrances to their satisfaction. To be a page
                                that supplies and distributes designer perfumes
                                ranging from affordable to high-end, including
                                niche perfumes in full size and mini versions,
                                as well as scented candles.
                            </p>
                        </div>
                        <div>
                            <img
                                :src="Vision"
                                alt="Perfume Bottle"
                                class="w-[570px] h-[500px] object-cover"
                            />
                        </div>
                    </div>
                </div>
                <div class="col-span-1 lg:col-span-2"></div>
                <!-- Right spacing -->
            </div>
        </div>
    </AppLayout>
</template>

<script>
import AppLayout from "../Layouts/AppLayout.vue";
import Story from "../../../public/images/story.jpg";
import Vision from "../../../public/images/vision.jpeg";
export default {
    components: { AppLayout },
    name: "AboutUs",
    data() {
        return {
            Story,
            Vision,
        };
    },
};
</script>

<style scoped>
/* Add any additional custom styles if needed */
</style>
