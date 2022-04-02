<template>
    <div class="relative">
        <div class="absolute text-center text-white w-full top-[40%] z-10 p-4 md:p-8 text-2xl md:text-4xl xl:text-[3rem] leading-normal md:leading-loose">
            <p class="font-thin">
                เป็นผู้นำทางอายุรศาสตร์โรคไต
            </p>
            <p class="font-medium">
                ของเอเซีย
            </p>
        </div>
        <div
            class="splide absolute"
            id="hero-slides-container"
        >
            <div class="splide__track">
                <ul class="splide__list">
                    <li
                        class="splide__slide"
                        v-for="image in images"
                        :key="image.name"
                    >
                        <img
                            class="w-full min-h-screen object-cover brightness-[0.7]"
                            :class="{
                                'object-left': image.left,
                                'object-center': image.center,
                                'object-right': image.right,
                                'zoom-in': image.animate,
                            }"
                            :src="`/image/${image.name}`"
                            :alt="`Sample ${image.name}`"
                        >
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script setup>
import Splide from '@splidejs/splide';
import '@splidejs/splide/dist/css/splide.min.css';
import { ref } from '@vue/reactivity';
import { onMounted } from '@vue/runtime-core';

const images = ref([
    { name: 'hero1.jpeg', center: true, right: false, left: false, animate: true },
    { name: 'hero8.jpeg', center: true, right: false, left: false, animate: false },
    { name: 'hero2.jpeg', center: true, right: false, left: false, animate: false },
    { name: 'hero3.jpeg', center: false, right: true, left: false, animate: false },
    { name: 'hero4.jpeg', center: true, right: false, left: false, animate: false },
    { name: 'hero7.jpeg', center: true, right: false, left: false, animate: false },
    { name: 'hero5.jpeg', center: true, right: false, left: false, animate: false },
    { name: 'hero6.jpeg', center: true, right: false, left: false, animate: false },
]);

onMounted(() => {
    let splide = new Splide( '#hero-slides-container' , {
        type: 'fade',
        rewind: true,
        arrows: false,
        autoplay: true,
        speed: 4000,
        interval: 10000,
        pauseOnHover: false,
    }).mount();

    splide.on( 'move', (newIndex, prevIndex) => {
        images.value[newIndex].animate = true;
        setTimeout(() => images.value[prevIndex].animate = false, 5000);
    });
});
</script>

<style scoped>
.zoom-in {
    animation: animate-zoom-in 40s ease;
}

@keyframes animate-zoom-in {
  0% {
    transform: scale(1, 1);
  }
  50% {
    transform: scale(1.125, 1.125);
  }
  100% {
    transform: scale(1.25, 1.25);
  }
}
</style>