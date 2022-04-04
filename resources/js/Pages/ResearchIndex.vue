<template>
    <Head :title="tag" />
    <article class="mt-16 py-16 px-4 md:py-24 md:px-16 xl:py-32 xl:px-24">
        <h1 class="text-2xl">
            {{ tag }}
        </h1>
        <ul class="text-lg p-8 space-y-4">
            <li class="list-disc">
                แสดงชื่อโครงการวิจัย
            </li>
            <li class="list-disc">
                แสดงชื่อหัวหน้าโครงการ
            </li>
            <li class="list-disc">
                link เข้าไปอ่านเพิ่มเติม หรือ link เข้าไปยังบทความที่เผยแพร่บน pubmed
            </li>
        </ul>
    </article>
</template>

<script setup>
defineProps({
    tag: { type: String, required: true }
});
</script>