<template>
    <section>
        <ArticleSectionHeader
            heading="บทความ"
            link="/articles"
            class="py-8 md:pt-0 md:pb-10 xl:pb-16"
        />
        <!-- mobile  -->
        <div
            class="md:hidden px-4 splide"
            id="article-slides-container"
        >
            <div class="splide__track">
                <ul class="splide__list">
                    <li
                        class="splide__slide"
                        v-for="(article, index) in articles"
                        :key="article.img"
                    >
                        <div
                            class="aspect-w-1 aspect-h-1 bg-gradient-to-tl from-complement to-gray-200"
                            :class="{
                                'bg-gradient-to-tl': index % 2 === 0,
                                'bg-gradient-to-tr': index % 2 !== 0,
                            }"
                        >
                            <img
                                class="w-full object-contain object-center"
                                :src="`/image/${article.img}`"
                                :alt="article.img"
                            >
                        </div>
                        <ArticlePeek
                            class="pt-4 pb-10"
                            :article="article"
                            :use-truncate="useTruncate"
                        />
                    </li>
                </ul>
            </div>
        </div>

        <!-- tablet & desktop  -->
        <div class="hidden md:grid grid-flow-col grid-rows-1 overflow-x-scroll pb-24 lg:pb-32">
            <div class="flex items-center justify-center w-32 lg:40 xl:w-48 overflow-hidden">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="w-64 lg:w-80 xl:w-96 text-gray-200 scale-[300%]"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M11 19l-7-7 7-7m8 14l-7-7 7-7"
                    />
                </svg>
            </div>
            <div
                class="w-64 px-4 lg:w-80 lg:px-6 xl:w-96 xl:px-8 pt-0"
                v-for="(article, index) in articles"
                :key="article.img"
            >
                <div class="shadow">
                    <div
                        class="aspect-w-1 aspect-h-1 bg-gradient-to-tl from-complement to-gray-200"
                        :class="{
                            'bg-gradient-to-tl': index % 2 === 0,
                            'bg-gradient-to-tr': index % 2 !== 0,
                        }"
                    >
                        <img
                            class="w-full object-contain object-center"
                            :src="`/image/${article.img}`"
                            :alt="article.img"
                        >
                    </div>
                    <ArticlePeek
                        class="bg-primary pt-4 pb-10 px-2"
                        :article="article"
                    />
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import Splide from '@splidejs/splide';
import ArticleSectionHeader from '@/Components/Helpers/ArticleSectionHeader';
import ArticlePeek from '@/Components/Helpers/ArticlePeek';
import { onMounted } from '@vue/runtime-core';

defineProps({
    articles: { type: Array, required: true },
    useTruncate: { type: Boolean }
});

onMounted(() => {
    new Splide('#article-slides-container', {
        type: 'loop',
        rewind: true,
        arrows: false,
        pagination: true,
        autoplay: true,
        speed: 1000,
        interval: 7500
    }).mount();
});
</script>