<template>
    <section>
        <ArticleSectionHeader
            heading="ข่าวสาร"
            link="#"
            class="mb-8 md:mb-10 lg:mb-16"
        />

        <!-- mobile -->
        <div
            v-for="(article, key) in news"
            :key="key"
            class="md:hidden flex items-center p-4 space-x-8 border-b border-dashed border-complement-alt"
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

        <!-- tablet & desktop -->
        <div class="hidden md:grid grid-cols-2 mx-16 lg:mx-24">
            <a
                class="group block aspect-w-1 aspect-h-1 overflow-hidden border-4 lg:border-8 border-primary"
                :href="news[0].route"
            >
                <img
                    class="w-full h-full object-center object-cover brightness-[0.7] transition-transform duration-500 group-hover:scale-110"
                    :src="`/image/${news[0].img}`"
                    alt="1st"
                >
                <div class="flex items-end">
                    <div class="text-primary font-medium p-4 lg:p-8">
                        <h3 class="text-xl lg:text-4xl lg:leading-[3rem]">
                            {{ news[0].title }}
                        </h3>
                        <div class="flex max-w-fit mt-4 lg:mt-8 border-l-4 border-complement-alt space-x-2 lg:space-x-4 p-2 lg:px-4 transition-colors duration-500 ease-in-out group-hover:bg-primary group-hover:text-complement-alt">
                            <div class="text-3xl lg:text-4xl">{{ news[0].d }}</div>
                            <div class="text-xs lg:text-sm">
                                <div>{{ news[0].m }}</div>
                                <div>{{ news[0].y }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <div class="aspect-w-1 aspect-h-1">
                <div>
                    <a
                        class="group block h-1/2 overflow-hidden relative border-4 border-l-0 lg:border-8 lg:border-l-0 border-primary"
                        :href="news[1].route"
                    >
                        <img
                            class="w-full h-full object-center object-cover brightness-[0.7] transition-transform duration-500 group-hover:scale-110"
                            :src="`/image/${news[1].img}`"
                            alt="2nd"
                        >
                        <div class="absolute h-full top-0">
                            <div class="flex items-end h-full">
                                <div class="text-primary font-medium p-2 lg:p-4">
                                    <h3 class="text-lg lg:text-2xl lg:leading-[2rem]">
                                        {{ news[1].title }}
                                    </h3>
                                    <div class="flex max-w-fit mt-2 lg:mt-4 border-l-2 border-complement-alt space-x-1 lg:space-x-2 p-1 lg:px-2 transition-colors duration-500 ease-in-out group-hover:bg-primary group-hover:text-complement-alt">
                                        <div class="text-xl lg:text-2xl">{{ news[1].d }}</div>
                                        <div class="text-[0.5rem] lg:text-xs">
                                            <div>{{ news[1].m }}</div>
                                            <div>{{ news[1].y }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="h-1/2 grid grid-cols-2">
                        <a
                            class="group block overflow-hidden relative border-primary border-b-4 border-r-4 lg:border-b-8 lg:border-r-8"
                            :href="news[2].route"
                        >
                            <img
                                class="w-full h-full object-center object-cover brightness-[0.7] transition-transform duration-500 group-hover:scale-110"
                                :src="`/image/${news[2].img}`"
                                alt="2nd"
                            >
                            <div class="absolute h-full top-0">
                                <div class="flex items-end h-full">
                                    <div class="text-primary font-medium p-2 lg:p-4">
                                        <h3 class="text lg:text-xl lg:leading-[1.5rem]">
                                            {{ news[2].title }}
                                        </h3>
                                        <div class="flex max-w-fit mt-2 lg:mt-4 border-l-2 border-complement-alt space-x-1 lg:space-x-2 p-1 lg:px-2 transition-colors duration-500 ease-in-out group-hover:bg-primary group-hover:text-complement-alt">
                                            <div class="text-sm lg:text-2xl">{{ news[2].d }}</div>
                                            <div class="text-[0.5rem] lg:text-xs">
                                                <div>{{ news[2].m }}</div>
                                                <div>{{ news[2].y }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a
                            class="group block overflow-hidden relative border-primary border-b-4 border-r-4 lg:border-b-8 lg:border-r-8"
                            :href="news[3].route"
                        >
                            <img
                                class="w-full h-full object-center object-cover brightness-[0.7] transition-transform duration-500 group-hover:scale-110"
                                :src="`/image/${news[3].img}`"
                                alt="2nd"
                            >
                            <div class="absolute h-full top-0">
                                <div class="flex items-end h-full">
                                    <div class="text-primary font-medium p-2 lg:p-4">
                                        <h3 class="text lg:text-xl lg:leading-[1.5rem]">
                                            {{ news[3].title }}
                                        </h3>
                                        <div class="flex max-w-fit mt-2 lg:mt-4 border-l-2 border-complement-alt space-x-1 lg:space-x-2 p-1 lg:px-2 transition-colors duration-500 ease-in-out group-hover:bg-primary group-hover:text-complement-alt">
                                            <div class="text-sm lg:text-2xl">{{ news[3].d }}</div>
                                            <div class="text-[0.5rem] lg:text-xs">
                                                <div>{{ news[3].m }}</div>
                                                <div>{{ news[3].y }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import { ref } from '@vue/reactivity';
import ArticleSectionHeader from '@/Components/Helpers/ArticleSectionHeader';

defineProps({
    useTruncate: { type: Boolean }
});

const news = ref([
    { img: 'news2.jpeg', route: '#', d: 14, m: 'FEB', y: 2022, title: 'สารจากหัวหน้าสาขาวิชาวักกะวิทยา ศิริราชพยาบาล', text: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita labore, quos quae numquam eaque magni ea quisquam cupiditate. Tempore soluta vero, quisquam a unde ullam? Expedita reiciendis commodi nam repudiandae.' },
    { img: 'news1.jpeg', route: '#', d: 25, m: 'JAN', y: 2022, title: 'รับสมัครเฟลโลว์อนุสาขาอายุรศาสตร์โรตไต ประจำปีการศึกษา 2566', text: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita labore, quos quae numquam eaque magni ea quisquam cupiditate. Tempore soluta vero, quisquam a unde ullam? Expedita reiciendis commodi nam repudiandae.' },
    { img: 'news3.jpeg', route: '#', d: '07', m: 'DEC', y: 2021, title: 'เจ้าหน้าที่สาขาฯ รับรางวัลคนดีศรีอายุศาสตร์ประเภทอาวุโส', text: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita labore, quos quae numquam eaque magni ea quisquam cupiditate. Tempore soluta vero, quisquam a unde ullam? Expedita reiciendis commodi nam repudiandae.' },
    { img: 'news4.jpeg', route: '#', d: 11, m: 'NOV', y: 2021, title: 'อาจารย์ประจำสาขาฯ รับตำแหน่งนายกสมาคมคนนอนดูซีรีย์อยู่บ้าน', text: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita labore, quos quae numquam eaque magni ea quisquam cupiditate. Tempore soluta vero, quisquam a unde ullam? Expedita reiciendis commodi nam repudiandae.' },
]);
</script>