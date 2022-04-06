<template>
    <a
        class="aspect-w-2 aspect-h-1 w-full shadow-lg block xl:hidden"
        :data-aos="animate"
        :href="link"
    >
        <img
            class="object-center object-cover"
            :src="`/image/${image}`"
            alt="hey"
        >
        <div class="flex items-end justify-between bg-gray-600/40 text-white p-4">
            <div class="">
                <slot />
            </div>
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
                    d="M17 8l4 4m0 0l-4 4m4-4H3"
                />
            </svg>
        </div>
    </a>

    <a
        class="hidden xl:block w-full aspect-w-1 aspect-h-1 shadow-lg relative"
        :data-aos="animate"
        :href="link"
    >
        <img
            class="object-center object-cover"
            :src="`/image/${image}`"
            alt="hey"
        >
        <div class="flex items-end justify-between bg-gray-600/40 text-white p-4">
            <div class="">
                <slot />
            </div>
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
                    d="M17 8l4 4m0 0l-4 4m4-4H3"
                />
            </svg>
        </div>
    </a>
</template>

<script setup>
defineProps({
    image: { type: String, default: '' },
    link: { type: String, default: '#' },
    animate: { type: String, default: '' },
});
</script>