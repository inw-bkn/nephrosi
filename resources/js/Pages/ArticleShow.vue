<template>
    <Head :title="title" />
    <article class="mt-16 py-16 px-4 md:py-24 md:px-16 xl:py-32 xl:px-24">
        <h1 class="text-2xl">
            {{ title }}
        </h1>
        <ul class="text-lg p-8 space-y-4">
            <li class="list-disc">
                ภาพปก หรือ คลิปวีดีโอ(ถ้มี)
            </li>
            <li class="list-disc">
                เอกสารที่ให้ download ได้ (ถ้ามี)
            </li>
            <li class="list-disc">
                เนื้อหา
            </li>
        </ul>
    </article>
</template>

<script setup>
defineProps({
    title: { type: String, required: true }
});
</script>