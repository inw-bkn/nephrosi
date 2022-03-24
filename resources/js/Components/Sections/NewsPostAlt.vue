<template>
    <section>
        <ArticleSectionHeader
            heading="ข่าวสาร"
            link="#"
        />
        <div
            v-for="(article, key) in news"
            :key="key"
            class="flex items-center py-4 space-x-8 border-b border-dashed border-complement-alt"
        >
            <div class="w-2/3 text-center underline underline-offset-1 decoration-accent">
                {{ article.title }}
            </div>
            <div class="w-1/3">
                <img
                    class="w-full object-cover object-center"
                    :src="`/image/${article.img}`"
                    :alt="article.img"
                >
            </div>
        </div>
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
    autoplay: false,
    speed: 1000,
});

const news = ref([
    { img: 'news1.jpeg', link: '#', d: 14, m: 'FEB', y: 2022, title: 'รับสมัครเฟลโลว์อนุสาขาอายุรศาสตร์โรตไต ประจำปีการศึกษา 2566', text: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita labore, quos quae numquam eaque magni ea quisquam cupiditate. Tempore soluta vero, quisquam a unde ullam? Expedita reiciendis commodi nam repudiandae.' },
    { img: 'news1.jpeg', link: '#', d: 14, m: 'FEB', y: 2022, title: 'รับสมัครเฟลโลว์อนุสาขาอายุรศาสตร์โรตไต ประจำปีการศึกษา 2566', text: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita labore, quos quae numquam eaque magni ea quisquam cupiditate. Tempore soluta vero, quisquam a unde ullam? Expedita reiciendis commodi nam repudiandae.' },
    { img: 'news2.jpeg', link: '#', d: 1, m: 'JAN', y: 2022, title: 'สารจากหัวหน้าสาขาวิชาวักกะวิทยา ศิริราชพยาบาล', text: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita labore, quos quae numquam eaque magni ea quisquam cupiditate. Tempore soluta vero, quisquam a unde ullam? Expedita reiciendis commodi nam repudiandae.' },
    { img: 'news2.jpeg', link: '#', d: 1, m: 'JAN', y: 2022, title: 'สารจากหัวหน้าสาขาวิชาวักกะวิทยา ศิริราชพยาบาล', text: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita labore, quos quae numquam eaque magni ea quisquam cupiditate. Tempore soluta vero, quisquam a unde ullam? Expedita reiciendis commodi nam repudiandae.' },
]);
</script>