<template>
    <section>
        <div class="flex items-end justify-between">
            <h2 class="text-xl font-medium text-primary">
                บทความ
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
                <div class="pt-6 bg-complement-alt">
                    <h3 class="mt-0 truncate text-primary font-medium">
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
    arrows: false,
    pagination: true,
    autoplay: true,
    speed: 1000,
    interval: 7500
});

const articles = ref([
    { img: 'article1.jpeg', title: 'พบหมอศิริราช ลดเสี่ยง เลี่ยงโรคไต', text: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita labore, quos quae numquam eaque magni ea quisquam cupiditate. Tempore soluta vero, quisquam a unde ullam? Expedita reiciendis commodi nam repudiandae.' },
    { img: 'article2.jpeg', title: 'พบหมอศิริราช มารู้จักโซเดียมกัน', text: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita labore, quos quae numquam eaque magni ea quisquam cupiditate. Tempore soluta vero, quisquam a unde ullam? Expedita reiciendis commodi nam repudiandae.' },
    { img: 'article3.jpeg', title: 'อาหารจานเดียว สำหรับผู้ป่วยฟอกไต', text: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita labore, quos quae numquam eaque magni ea quisquam cupiditate. Tempore soluta vero, quisquam a unde ullam? Expedita reiciendis commodi nam repudiandae.' },
    { img: 'article4.jpeg', title: 'ยาในโรคไตเรื้อรังและข้อปฏิบัติที่ควรทราบ', text: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita labore, quos quae numquam eaque magni ea quisquam cupiditate. Tempore soluta vero, quisquam a unde ullam? Expedita reiciendis commodi nam repudiandae.' },
]);
</script>