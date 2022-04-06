<template>
    <section>
        <ArticleSectionHeader
            heading="ข่าวสาร"
            link="/articles?tag=ข่าวสาร"
            class="mb-8 md:mb-10 lg:mb-16"
        />

        <!-- mobile -->
        <div
            v-for="(article, key) in news"
            :key="key"
            class="md:hidden flex items-center p-4 space-x-8 border-b border-dashed border-complement-alt"
        >
            <Link
                class="block w-2/3 text-center underline underline-offset-1 decoration-accent"
                :href="article.route"
            >
                {{ article.title }}
            </Link>
            <div class="w-1/3">
                <img
                    class="w-full object-cover object-center"
                    :src="`/image/${article.img}`"
                    :alt="article.img"
                >
            </div>
        </div>

        <!-- tablet & desktop -->
        <div class="hidden md:grid grid-cols-2 mx-16 xl:mx-24">
            <a
                class="group block aspect-w-1 aspect-h-1 overflow-hidden border-4 xl:border-8 border-primary"
                :href="news[0].route"
            >
                <img
                    class="w-full h-full object-center object-cover brightness-[0.7] transition-transform duration-500 group-hover:scale-110"
                    :src="`/image/${news[0].img}`"
                    alt="1st"
                >
                <div class="flex items-end">
                    <div class="text-primary font-medium p-4 xl:p-8">
                        <h3 class="text-xl xl:text-4xl xl:leading-[3rem]">
                            {{ news[0].title }}
                        </h3>
                        <div class="flex max-w-fit mt-4 xl:mt-8 border-l-4 border-complement-alt space-x-2 xl:space-x-4 p-2 xl:px-4 transition-colors duration-500 ease-in-out group-hover:bg-primary group-hover:text-complement-alt">
                            <div class="text-3xl xl:text-4xl">{{ news[0].d }}</div>
                            <div class="text-xs xl:text-sm">
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
                        class="group block h-1/2 overflow-hidden relative border-4 border-l-0 xl:border-8 xl:border-l-0 border-primary"
                        :href="news[1].route"
                    >
                        <img
                            class="w-full h-full object-center object-cover brightness-[0.7] transition-transform duration-500 group-hover:scale-110"
                            :src="`/image/${news[1].img}`"
                            alt="2nd"
                        >
                        <div class="absolute h-full top-0">
                            <div class="flex items-end h-full">
                                <div class="text-primary font-medium p-2 xl:p-4">
                                    <h3 class="text-lg xl:text-2xl xl:leading-[2rem]">
                                        {{ news[1].title }}
                                    </h3>
                                    <div class="flex max-w-fit mt-2 xl:mt-4 border-l-2 border-complement-alt space-x-1 xl:space-x-2 p-1 xl:px-2 transition-colors duration-500 ease-in-out group-hover:bg-primary group-hover:text-complement-alt">
                                        <div class="text-xl xl:text-2xl">{{ news[1].d }}</div>
                                        <div class="text-[0.5rem] xl:text-xs">
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
                            class="group block overflow-hidden relative border-primary border-b-4 border-r-4 xl:border-b-8 xl:border-r-8"
                            :href="article.route"
                            v-for="(article, key) in news.slice(2)"
                            :key="key"
                        >
                            <img
                                class="w-full h-full object-center object-cover brightness-[0.7] transition-transform duration-500 group-hover:scale-110"
                                :src="`/image/${article.img}`"
                                alt="2nd"
                            >
                            <div class="absolute h-full top-0">
                                <div class="flex items-end h-full">
                                    <div class="text-primary font-medium p-2 xl:p-4">
                                        <h3 class="text xl:text-xl xl:leading-[1.5rem]">
                                            {{ article.title }}
                                        </h3>
                                        <div class="flex max-w-fit mt-2 xl:mt-4 border-l-2 border-complement-alt space-x-1 xl:space-x-2 p-1 xl:px-2 transition-colors duration-500 ease-in-out group-hover:bg-primary group-hover:text-complement-alt">
                                            <div class="text-sm xl:text-2xl">{{ article.d }}</div>
                                            <div class="text-[0.5rem] xl:text-xs">
                                                <div>{{ article.m }}</div>
                                                <div>{{ article.y }}</div>
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
import ArticleSectionHeader from '@/Components/Helpers/ArticleSectionHeader';

defineProps({
    news: { type: Array, required: true },
    useTruncate: { type: Boolean },
});
</script>