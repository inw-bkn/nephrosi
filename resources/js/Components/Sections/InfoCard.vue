<template>
    <a
        class="aspect-w-2 aspect-h-1 shadow bg-cover bg-center block"
        :style="`background-image: url('/image/${image}')`"
        :data-aos="animate"
        data-aos-once="true"
        :href="link"
    >
        <div class="flex items-end h-full justify-between bg-gray-600/40 text-white p-4">
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