<template>
    <Head title="Nephr@SI" />
    <HeroSection data-aos="fade-down" />

    <NewsSection
        class="mt-16 md:mt-24 xl:mt-32"
        data-aos="fade-up"
        :use-truncate="useTruncate"
    />

    <ArticleSection
        class="bg-gray-100 mt-16 md:mt-24 xl:mt-32 md:pt-24 xl:pt-32"
        data-aos="fade-up"
        :use-truncate="useTruncate"
    />

    <!-- info section -->
    <section class="bg-topography px-4 py-8 space-y-8 md:p-24 md:space-y-24 xl:p-32 xl:pt-0 xl:grid grid-cols-3 gap-x-8">
        <InfoCard
            image="info1.jpeg"
            animate="zoom-in-up"
            link="/vision-mission"
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
            link="/training-programs"
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
            link="/articles?tag=ความรู้สำหรับประชาชน"
        >
            <div class="text-2xl font-medium">
                ความรู้สำหรับประชาชน
            </div>
            <div class="text-xl font-thin mt-4">
                โรคไตเรื้อรัง การบำบัดทดแทนไต อาหารและยา
            </div>
        </InfoCard>
    </section>

    <!-- stat section -->
    <section class="px-4 py-8 md:p-24 md:pb-0 xl:p-32">
        <div class="grid grid-cols-2 gap-x-8 xl:grid-cols-6 xl:gap-x-6">
            <div class="aspect-w-1 aspect-h-1">
                <div class="flex items-center justify-center bg-complement-alt rounded-full z-10">
                    <div class="text-4xl xl:text-xl text-primary">
                        สถิติ
                    </div>
                </div>
            </div>
            <div
                class="aspect-w-1 aspect-h-1"
                v-for="stat in stats"
                :key="stat.id"
            >
                <div
                    class="text-center flex flex-col items-center justify-center space-y-4 xl:bg-gray-100 xl:rounded-full xl:border-2 border-dashed border-complement-alt"
                    :data-aos="stat.animate"
                    data-stat-counting="true"
                    :data-stat-count="stat.count"
                >
                    <p class="font-medium text-complement-alt text-4xl xl:text-xl">
                        +<span v-text="stat.count" />
                    </p>
                    <p class="text-md">
                        {{ stat.title }}
                    </p>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import HeroSection from '@/Components/Sections/HeroSection';
import NewsSection from '@/Components/Sections/NewsSection';
import ArticleSection from '@/Components/Sections/ArticleSection';
import InfoCard from '@/Components/Sections/InfoCard';
import { onMounted, onUnmounted, ref } from '@vue/runtime-core';
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

const handleScrollToggleNavBg = () => {
    const vh = Math.max(document.documentElement.clientHeight || 0, window.innerHeight || 0);
    usePage().props.value.event.payload = window.scrollY < (vh * 0.5);
    usePage().props.value.event.name = 'set-nav-transparent-background';
    usePage().props.value.event.fire = + new Date();
};

const handleAos = ({ detail }) => {
    if (!detail.dataset.statCounting) {
        return;
    }
    let counting = detail.querySelector('span');
    animateValue(counting, 0, detail.dataset.statCount, 2500);
};

onMounted(() => {
    AOS.init({duration: 1200, once: true});

    usePage().props.value.event.payload = true;
    usePage().props.value.event.name = 'set-nav-transparent-background';
    usePage().props.value.event.fire = + new Date();

    document.addEventListener('scroll', handleScrollToggleNavBg);
    document.addEventListener('aos:in', handleAos);
});

onUnmounted(() => {
    document.removeEventListener('scroll', handleScrollToggleNavBg);
    document.removeEventListener('aos:in', handleAos);
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
