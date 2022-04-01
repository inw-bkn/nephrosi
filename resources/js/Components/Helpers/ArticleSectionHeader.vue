<template>
    <div class="flex items-end md:items-center justify-between px-4 md:px-16 xl:px-24">
        <h2 class="text-2xl font-medium text-complement-alt md:text-4xl">
            {{ heading }}
        </h2>
        <Link
            class="text-accent"
            :href="link"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6 md:h-8 md:w-8 xl:w-10"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"
                />
            </svg>
        </Link>
    </div>
</template>

<script setup>
defineProps({
    heading: { type: String, default: 'placeholder' },
    link: { type: String, default: '#' },
});
</script>