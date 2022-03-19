<template>
    <section>
        <div class="flex items-end justify-between">
            <h2 class="text-xl font-medium text-primary-800">
                บทความ
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
                v-for="article in articles"
                :key="article.img"
            >
                <div class="bg-gray-200">
                    <img
                        class="w-96 h-96 mx-auto object-contain object-center"
                        :src="`/image/${article.img}`"
                        :alt="article.img"
                    >
                </div>
                <p class="mt-4 line-clamp-2 font-medium text-ellipsis">
                    {{ article.title }}
                </p>
                <p class="mt-2 line-clamp-3 text-ellipsis">
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
    arrows: false,
    pagination: true,
    autoplay: true,
    speed: 1000,
    interval: 5000
});

const articles = ref([
    { img: 'article1.jpeg', title: 'พบหมอศิริราช ลดเสี่ยง เลี่ยงโรคไต', text: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita labore, quos quae numquam eaque magni ea quisquam cupiditate. Tempore soluta vero, quisquam a unde ullam? Expedita reiciendis commodi nam repudiandae.' },
    { img: 'article2.jpeg', title: 'พบหมอศิริราช มารู้จักโซเดียมกัน', text: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita labore, quos quae numquam eaque magni ea quisquam cupiditate. Tempore soluta vero, quisquam a unde ullam? Expedita reiciendis commodi nam repudiandae.' },
    { img: 'article3.jpeg', title: 'อาหารจานเดียว สำหรับผู้ป่วยฟอกไต', text: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita labore, quos quae numquam eaque magni ea quisquam cupiditate. Tempore soluta vero, quisquam a unde ullam? Expedita reiciendis commodi nam repudiandae.' },
    { img: 'article4.jpeg', title: 'ยาในโรคไตเรื้อรังและข้อปฏิบัติที่ควรทราบ', text: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita labore, quos quae numquam eaque magni ea quisquam cupiditate. Tempore soluta vero, quisquam a unde ullam? Expedita reiciendis commodi nam repudiandae.' },
]);
</script>