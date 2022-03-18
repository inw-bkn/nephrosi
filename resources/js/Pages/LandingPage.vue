<template>
    <Head title="Nephr@SI" />
    <MainMenu />
    <HeroSlider />
    <div class="min-h-screen bg-slate-500">
        foo
    </div>
    <div class="min-h-screen bg-green-500">
        bar
    </div>
</template>

<script setup>
import { Head } from '@inertiajs/inertia-vue3';
import MainMenu from '@/Components/Sections/MainMenu';
import HeroSlider from '@/Components/Sections/HeroSlider';
</script>

<script>
import Plain from '@/Components/Layouts/Plain';
export default {
    layout: Plain
};
</script>
