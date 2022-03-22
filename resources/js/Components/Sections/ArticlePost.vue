<template>
    <section>
        <ArticleSectionHeader
            heading="บทความ"
            link="#"
        />
        <Splide
            class="mt-4 bg-gradient-to-tl from-complement-alt to-gray-200"
            :options="splideOptions"
        >
            <SplideSlide
                v-for="article in articles"
                :key="article.img"
            >
                <div class="aspect-w-1 aspect-h-1">
                    <img
                        class="w-full object-contain object-center"
                        :src="`/image/${article.img}`"
                        :alt="article.img"
                    >
                </div>
                <ArticlePeek
                    class="pt-4 bg-primary pb-10"
                    :article="article"
                    :use-truncate="useTruncate"
                />
            </SplideSlide>
        </Splide>
    </section>
</template>

<script setup>
import { Splide, SplideSlide } from '@splidejs/vue-splide';
import { reactive, ref } from '@vue/reactivity';
import ArticleSectionHeader from '@/Components/Helpers/ArticleSectionHeader';
import ArticlePeek from '@/Components/Helpers/ArticlePeek';

defineProps({
    useTruncate: { type: Boolean }
});

const splideOptions = reactive({
    type: 'loop',
    rewind: true,
    arrows: false,
    pagination: true,
    autoplay: true,
    speed: 1000,
    interval: 7500
});

const articles = ref([
    { img: 'article1.jpeg', link: '#', title: 'พบหมอศิริราช ลดเสี่ยง เลี่ยงโรคไต', text: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita labore, quos quae numquam eaque magni ea quisquam cupiditate. Tempore soluta vero, quisquam a unde ullam? Expedita reiciendis commodi nam repudiandae.' },
    { img: 'article2.jpeg', link: '#', title: 'พบหมอศิริราช มารู้จักโซเดียมกัน', text: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita labore, quos quae numquam eaque magni ea quisquam cupiditate. Tempore soluta vero, quisquam a unde ullam? Expedita reiciendis commodi nam repudiandae.' },
    { img: 'article3.jpeg', link: '#', title: 'อาหารจานเดียว สำหรับผู้ป่วยฟอกไต', text: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita labore, quos quae numquam eaque magni ea quisquam cupiditate. Tempore soluta vero, quisquam a unde ullam? Expedita reiciendis commodi nam repudiandae.' },
    { img: 'article4.jpeg', link: '#', title: 'ยาในโรคไตเรื้อรังและข้อปฏิบัติที่ควรทราบ', text: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita labore, quos quae numquam eaque magni ea quisquam cupiditate. Tempore soluta vero, quisquam a unde ullam? Expedita reiciendis commodi nam repudiandae.' },
]);
</script>