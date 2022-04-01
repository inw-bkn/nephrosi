<template>
    <section>
        <ArticleSectionHeader
            heading="ความรู้สำหรับประชาชน"
            link="#"
            class="py-8 md:pt-0 md:pb-10 lg:pb-16"
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
        <div class="hidden md:grid grid-flow-col grid-rows-1 overflow-x-scroll">
            <div class="w-32 lg:40 xl:w-48" />
            <div
                class="w-64 px-4 lg:w-80 lg:px-6 xl:w-96 xl:px-8 pt-0 pb-24 lg:pb-32"
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
import { ref } from '@vue/reactivity';
import ArticleSectionHeader from '@/Components/Helpers/ArticleSectionHeader';
import ArticlePeek from '@/Components/Helpers/ArticlePeek';
import { onMounted } from '@vue/runtime-core';

defineProps({
    useTruncate: { type: Boolean }
});

const articles = ref([
    { img: 'article1.jpeg', link: '#', title: 'พบหมอศิริราช ลดเสี่ยง เลี่ยงโรคไต', text: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita labore, quos quae numquam eaque magni ea quisquam cupiditate. Tempore soluta vero, quisquam a unde ullam? Expedita reiciendis commodi nam repudiandae.' },
    { img: 'article2.jpeg', link: '#', title: 'พบหมอศิริราช มารู้จักโซเดียมกัน', text: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita labore, quos quae numquam eaque magni ea quisquam cupiditate. Tempore soluta vero, quisquam a unde ullam? Expedita reiciendis commodi nam repudiandae.' },
    { img: 'article3.jpeg', link: '#', title: 'อาหารจานเดียว สำหรับผู้ป่วยฟอกไต', text: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita labore, quos quae numquam eaque magni ea quisquam cupiditate. Tempore soluta vero, quisquam a unde ullam? Expedita reiciendis commodi nam repudiandae.' },
    { img: 'article4.jpeg', link: '#', title: 'ยาในโรคไตเรื้อรังและข้อปฏิบัติที่ควรทราบ', text: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita labore, quos quae numquam eaque magni ea quisquam cupiditate. Tempore soluta vero, quisquam a unde ullam? Expedita reiciendis commodi nam repudiandae.' },
]);

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