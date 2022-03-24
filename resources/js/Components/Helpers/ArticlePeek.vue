<template>
    <div>
        <h3 class="mt-0 truncate font-medium">
            {{ article.title }}
        </h3>
        <article :class="{'mt-2 truncate': useTruncate, 'mt-2 line-clamp-2': !useTruncate}">
            <Link
                :href="article.link"
                class="underline underline-offset-1 decoration-accent"
            >
                {{ article.text }}
            </Link>
        </article>
    </div>
</template>

<script setup>

defineProps({
    article: { type: Object, required: true },
    useTruncate: { type: Boolean },
});

</script>
