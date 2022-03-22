<template>
    <Head title="Nephr@SI" />
    <HeroSlider data-aos="fade-down" />
    <NewsPost
        class="p-4 pt-8"
        data-aos="fade-up"
        :use-truncate="useTruncate"
    />
    <ArticlePost
        class="p-4 pt-8"
        data-aos="fade-up"
        data-aos-id="trigger-nav-background"
        :use-truncate="useTruncate"
    />
    <div class="bg-info px-4 py-8 space-y-8">
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
    </div>
    <div
        class="min-h-screen bg-complement p-8"
    >
        <div
            class="bg-gray-200 w-64 h-64 text-center pt-32 text-4xl mt-8"
            data-aos="slide-up"
        >
            up
        </div>

        <div
            class="bg-gray-200 w-64 h-64 text-center pt-32 text-4xl mt-8"
            data-aos="slide-down"
        >
            down
        </div>
    </div>
    <div class=" line-clamp-2">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto eaque tenetur non a accusamus, fugiat quae magni libero reiciendis, expedita adipisci atque similique harum asperiores ipsam, placeat voluptatum quidem mollitia!
    </div>
    <div class=" truncate">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto eaque tenetur non a accusamus, fugiat quae magni libero reiciendis, expedita adipisci atque similique harum asperiores ipsam, placeat voluptatum quidem mollitia!
    </div>
</template>

<script setup>
import HeroSlider from '@/Components/Sections/HeroSlider';
import NewsPost from '@/Components/Sections/NewsPost';
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

onMounted(() => {
    usePage().props.value.event.payload = null;
    usePage().props.value.event.name = 'toggle-nav-transparent-background';
    usePage().props.value.event.fire = + new Date();

    AOS.init({duration: 1500});

    document.addEventListener('aos:in:trigger-nav-background', () => {
        usePage().props.value.event.payload = null;
        usePage().props.value.event.name = 'toggle-nav-transparent-background';
        usePage().props.value.event.fire = + new Date();
    });
});
</script>
