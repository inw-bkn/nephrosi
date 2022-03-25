<template>
    <Head title="Nephr@SI" />
    <HeroSlider data-aos="fade-down" />
    <NewsPostAlt
        class="p-4 mb-8"
        data-aos="fade-up"
        :use-truncate="useTruncate"
    />
    <ArticlePost
        class="bg-gray-100 p-4 pb-8"
        data-aos="fade-up"
        :use-truncate="useTruncate"
    />
    <section class="bg-topography px-4 py-8 space-y-8">
        <InfoCard
            image="info1.jpeg"
            animate="zoom-in-up"
        >
            <div class="text-2xl  font-medium">
                วิสัยทัศน์
            </div>
            <div class="text-xl  font-thin mt-4">
                เป็นผู้นำทางอายุรศาสตร์โรคไต <br class="sm:hidden"><span class="font-medium">ของเอเซีย</span>
            </div>
        </InfoCard>
        <InfoCard
            image="info2.jpeg"
            animate="zoom-in"
        >
            <div class="text-2xl font-medium">
                หลักสูตรฝึกอบรม
            </div>
            <div class="text-xl font-thin mt-4">
                อายุรแพทย์โรคไต
            </div>
            <div class="text-xl font-thin mt-4">
                พยาบาลไตเทียม
            </div>
        </InfoCard>
        <InfoCard
            image="info3.jpeg"
            animate="zoom-in-down"
        >
            <div class="text-2xl font-medium">
                ความรู้สำหรับประชาชน
            </div>
            <div class="text-xl font-thin mt-4">
                โรคไตเรื้อรัง การบำบัดทดแทนไต อาหารและยา
            </div>
        </InfoCard>
    </section>
    <section class="px-4 py-8">
        <div class="grid grid-cols-2 justify-center gap-x-8">
            <div class="flex items-center justify-center aspect-1 bg-complement-alt rounded-full z-10">
                <div class="text-4xl text-primary">
                    สถิติ
                </div>
            </div>
            <div
                v-for="stat in stats"
                :key="stat.id"
                class="aspect-1 text-center flex flex-col items-center justify-center space-y-4 bg-primary"
                :data-aos="stat.animate"
                data-stat-counting="true"
                :data-stat-count="stat.count"
            >
                <p class="font-medium text-complement-alt text-4xl">
                    +<span v-text="stat.count" />
                </p>
                <p class="text-md">
                    {{ stat.title }}
                </p>
            </div>
        </div>
    </section>
</template>

<script setup>
import HeroSlider from '@/Components/Sections/HeroSlider';
import NewsPost from '@/Components/Sections/NewsPost';
import NewsPostAlt from '@/Components/Sections/NewsPostAlt';
import ArticlePost from '@/Components/Sections/ArticlePost';
import InfoCard from '@/Components/Sections/InfoCard';
import { onMounted, ref } from '@vue/runtime-core';
import AOS from 'aos';
import 'aos/dist/aos.css';
import { usePage } from '@inertiajs/inertia-vue3';

const props = defineProps({
    agent: { type: Object, required: true }
});

const useTruncate = ref(props.agent.browser === 'Safari');

const stats = [
    { title: 'บทความ', count: 157, animate: 'fade-right', id: 'article-count-value' },
    { title: 'งานวิจัยตีพิมพ์', count: 278, animate: 'slide-down', id: 'publication-count-value' },
    { title: 'เฟลโลว์', count: 117, animate: 'fade-right', id: 'fellow-count-value' },
    { title: 'Renal Biopsy', count: 3401, animate: 'slide-down', id: 'biopsy-count-value' },
    { title: 'Kidney Transplant', count: 1602, animate: 'fade-right', id: 'kt-count-value' },
];

onMounted(() => {
    AOS.init({duration: 1200, once: true});

    document.addEventListener('scroll', () => {
        const vh = Math.max(document.documentElement.clientHeight || 0, window.innerHeight || 0);
        usePage().props.value.event.payload = window.scrollY < (vh * 0.5);
        usePage().props.value.event.name = 'set-nav-transparent-background';
        usePage().props.value.event.fire = + new Date();
    });

    document.addEventListener('aos:in', ({ detail }) => {
        if (!detail.dataset.statCounting) {
            return;
        }
        let counting = detail.querySelector('span');
        animateValue(counting, 0, detail.dataset.statCount, 2500);
    });
});

const animateValue = (obj, start, end, duration) => {
    let startTimestamp = null;
    const step = (timestamp) => {
        if (!startTimestamp) startTimestamp = timestamp;
        const progress = Math.min((timestamp - startTimestamp) / duration, 1);
        obj.innerHTML = Math.floor(progress * (end - start) + start);
        if (progress < 1) {
            window.requestAnimationFrame(step);
        }
    };
    window.requestAnimationFrame(step);
};
</script>
