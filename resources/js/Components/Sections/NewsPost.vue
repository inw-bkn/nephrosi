<template>
    <section>
        <div class="flex items-end justify-between">
            <h2 class="text-xl font-medium text-complement-alt">
                ข่าวสาร
            </h2>
            <Link
                class="text-accent"
                href="#"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"
                    />
                </svg>
            </Link>
        </div>
        <Splide
            class="mt-4 bg-gradient-to-br from-complement-alt to-gray-200"
            :options="splideOptions"
        >
            <template #before-track>
                <div class="splide__arrows">
                    <button class="splide__arrow splide__arrow--prev bg-primary">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-6 w-6 text-accent"
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
                    </button>
                    <button class="splide__arrow splide__arrow--next bg-primary">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-6 w-6 text-accent"
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
                    </button>
                </div>
            </template>
            <SplideSlide
                v-for="article in news"
                :key="article.img"
            >
                <div class="aspect-w-1 aspect-h-1">
                    <img
                        class="w-full object-contain object-center"
                        :src="`/image/${article.img}`"
                        :alt="article.img"
                    >
                </div>
                <div class="flex justify-end bg-primary">
                    <div class="w-1/2 bg-primary border-t-4 border-complement-alt p-2 -translate-y-[50%] text-complement-alt  flex items-end justify-end shadow">
                        <div class="mr-4 text-4xl font-medium italic">
                            {{ article.d }}
                        </div>
                        <div>
                            <div>{{ article.y }}</div>
                            <div>{{ article.m }}</div>
                        </div>
                    </div>
                </div>
                <div class="bg-primary">
                    <h3 class="mt-0 truncate text-complement-alt font-medium">
                        {{ article.title }}
                    </h3>
                    <article class="mt-2 line-clamp-2">
                        {{ article.text }}
                    </article>
                </div>
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
    { img: 'news1.jpeg', d: 14, m: 'FEB', y: 2022, title: 'รับสมัครเฟลโลว์', text: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita labore, quos quae numquam eaque magni ea quisquam cupiditate. Tempore soluta vero, quisquam a unde ullam? Expedita reiciendis commodi nam repudiandae.' },
    { img: 'news2.jpeg', d: 1, m: 'JAN', y: 2022, title: 'สารจากหัวหน้าสาขาฯ', text: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita labore, quos quae numquam eaque magni ea quisquam cupiditate. Tempore soluta vero, quisquam a unde ullam? Expedita reiciendis commodi nam repudiandae.' },
]);
</script>