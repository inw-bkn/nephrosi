<template>
    <section>
        <div class="flex items-end justify-between">
            <h2 class="text-xl font-medium text-primary-800">
                ข่าวสาร
            </h2>
            <Link
                class="flex underline decoration-primary-200 decoration-4"
                href="#"
            >
                <span class="text-sm">เพิ่มเติม</span>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="ml-2 h-6 w-6 text-primary-800"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M17 8l4 4m0 0l-4 4m4-4H3"
                    />
                </svg>
            </Link>
        </div>
        <Splide
            class="mt-4"
            :options="splideOptions"
        >
            <SplideSlide
                v-for="article in news"
                :key="article.img"
            >
                <div class="relative">
                    <div class="w-1/2 border-t-4 border-primary-800 p-2 bg-white absolute top-[85%] left-[50%] flex items-end justify-end">
                        <div class="mr-4 text-4xl font-medium italic">
                            {{ article.d }}
                        </div>
                        <div>
                            <div>{{ article.y }}</div>
                            <div>{{ article.m }}</div>
                        </div>
                    </div>
                    <img
                        class="w-full bg-gray-200 object-contain object-center"
                        :src="`/image/${article.img}`"
                        :alt="article.img"
                    >
                </div>
                <p class="mt-8 line-clamp-2 text-ellipsis">
                    {{ article.text }}
                </p>
            </SplideSlide>
        </Splide>
    </section>
</template>

<script setup>
import { Splide, SplideSlide } from '@splidejs/vue-splide';
import { reactive, ref } from '@vue/reactivity';

const splideOptions = reactive({
    type: 'loop',
    rewind: true,
    arrows: true,
    pagination: false,
    autoplay: false,
    speed: 1000,
});

const news = ref([
    { img: 'news1.jpeg', d: 14, m: 'FEB', y: 2022, text: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita labore, quos quae numquam eaque magni ea quisquam cupiditate. Tempore soluta vero, quisquam a unde ullam? Expedita reiciendis commodi nam repudiandae.' },
    { img: 'news2.jpeg', d: 1, m: 'JAN', y: 2022, text: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita labore, quos quae numquam eaque magni ea quisquam cupiditate. Tempore soluta vero, quisquam a unde ullam? Expedita reiciendis commodi nam repudiandae.' },
]);
</script>