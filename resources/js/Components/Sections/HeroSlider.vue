<template>
    <div class="relative">
        <div class="absolute text-center text-white w-full top-[40%] z-10 bg-gray-900/30 p-4 md:p-8 text-2xl md:text-4xl leading-normal md:leading-loose">
            <p class="font-thin">
                เป็นผู้นำทางอายุรศาสตร์โรคไต
            </p>
            <p class="font-medium">
                ของเอเซีย
            </p>
        </div>
        <Splide
            class="absolute"
            :options="splideOptions"
        >
            <SplideSlide
                v-for="image in images"
                :key="image.name"
            >
                <img
                    class="min-h-[65vh] md:min-h-fit md:w-full md:object-center object-cover zoom-in-out"
                    :class="{
                        'object-left': image.left,
                        'object-center': image.center,
                        'object-right': image.right,
                    }"
                    :src="`/image/${image.name}`"
                    :alt="`Sample ${image.name}`"
                >
            </SplideSlide>
        </Splide>
    </div>
</template>

<script setup>
import { Splide, SplideSlide } from '@splidejs/vue-splide';
import '@splidejs/splide/dist/css/splide.min.css';
import { reactive, ref } from '@vue/reactivity';

const splideOptions = reactive({
    type: 'fade',
    rewind: true,
    arrows: false,
    autoplay: true,
    speed: 4000,
    interval: 10000,
    pauseOnHover: false,
});

const images = ref([
    { name: 'hero1.jpeg', center: true, right: false, left: false },
    { name: 'hero2.jpeg', center: true, right: false, left: false },
    { name: 'hero3.jpeg', center: false, right: true, left: false },
    { name: 'hero4.jpeg', center: true, right: false, left: false },
    { name: 'hero7.jpeg', center: true, right: false, left: false },
    { name: 'hero5.jpeg', center: true, right: false, left: false },
    { name: 'hero6.jpeg', center: true, right: false, left: false },
]);
</script>

<style scoped>
.zoom-in-out {
    animation: zoom-in-zoom-out 40s ease infinite;
}

@keyframes zoom-in-zoom-out {
  0% {
    transform: scale(1, 1);
  }
  50% {
    transform: scale(1.25, 1.25);
  }
  100% {
    transform: scale(1, 1);
  }
}
</style>