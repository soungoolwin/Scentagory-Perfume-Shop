<template>
    <AppLayout>
        <div class="container mx-auto py-12 px-4 md:px-0">
            <div class="grid grid-cols-12 gap-4">
                <div class="lg:col-span-2"></div>
                <div class="col-span-12 lg:col-span-8">
                    <h1 class="text-4xl font-semibold mb-8 text-center">
                        Review Videos
                    </h1>
                    <div class="space-y-8">
                        <div
                            v-for="(video, index) in videos"
                            :key="index"
                            class="grid grid-cols-1 md:grid-cols-2 gap-4"
                            :class="{
                                'md:grid-cols-2-reverse': index % 2 !== 0,
                            }"
                        >
                            <div class="aspect-w-16 aspect-h-9">
                                <iframe
                                    :src="video.url"
                                    frameborder="0"
                                    allowfullscreen
                                    class="w-full h-full"
                                ></iframe>
                            </div>
                            <div class="flex flex-col justify-center">
                                <h2 class="text-2xl font-semibold mb-2">
                                    {{ video.name }}
                                </h2>
                                <p>{{ video.caption }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-2"></div>
            </div>
        </div>
    </AppLayout>
</template>

<script>
import AppLayout from "../Layouts/AppLayout.vue";

export default {
    components: { AppLayout },
    name: "ReviewVideos",
    data() {
        return {
            videos: [
                {
                    url: "https://www.youtube.com/embed/dQw4w9WgXcQ",
                    name: "Video Title 1",
                    caption: "This is a caption for video 1.",
                },
                {
                    url: "https://www.youtube.com/embed/3JZ_D3ELwOQ",
                    name: "Video Title 2",
                    caption: "This is a caption for video 2.",
                },
                {
                    url: "https://www.youtube.com/embed/tgbNymZ7vqY",
                    name: "Video Title 3",
                    caption: "This is a caption for video 3.",
                },
                {
                    url: "https://www.youtube.com/embed/dQw4w9WgXcQ",
                    name: "Video Title 4",
                    caption: "This is a caption for video 4.",
                },
                {
                    url: "https://www.youtube.com/embed/3JZ_D3ELwOQ",
                    name: "Video Title 5",
                    caption: "This is a caption for video 5.",
                },
                {
                    url: "https://www.youtube.com/embed/tgbNymZ7vqY",
                    name: "Video Title 6",
                    caption: "This is a caption for video 6.",
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
    padding-bottom: 56.25%;
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

.md\:grid-cols-2-reverse {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    direction: rtl;
}

.md\:grid-cols-2-reverse > * {
    direction: ltr;
}
</style>
