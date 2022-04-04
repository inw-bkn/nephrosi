<template>
    <!-- nav menu -->
    <header
        class="fixed top-0 z-20 w-full transition-colors duration-300"
        :class="{
            'bg-primary shadow-lg': !transparentBackground,
            'bg-gradient-to-b from-complement': transparentBackground
        }"
    >
        <div class="text-accent px-4 md:px-6 lg:px-8 flex items-center justify-between">
            <!-- the logo -->
            <Link
                class="inline-flex items-center"
                href="/"
            >
                <img
                    src="/image/logo-xs.png"
                    alt="logo"
                    class="h-8 w-8"
                >
                <span class="ml-2 font-medium text-lg">Nephr@SI</span>
            </Link>
            <!-- menu on nav -->
            <nav class="hidden md:block relative">
                <div
                    class="fixed left-0 right-0 min-h-full top-12 z-10"
                    @click="hideSubMenu"
                    v-if="desktopMenuVisible"
                />
                <ul class="flex space-x-0">
                    <li
                        v-for="(group, key) in menuGroups"
                        :key="key"
                        class="cursor-pointer font-medium px-4 py-4 lg:text-lg lg:px-10 xl:px-16"
                        @mouseover="showSubMenu(group.title)"
                        @click="showSubMenu(group.title)"
                        :class="{
                            'text-complement transition-colors duration-300 border-b-4 border-primary': !transparentBackground,
                            'text-accent border-accent': activeMenuTitle === group.title
                        }"
                    >
                        {{ group.title }}
                    </li>
                </ul>
                <transition name="fade-appear-above">
                    <div
                        class="hidden md:flex fixed top-[60px] lg:top-16 shadow-lg border-t border-complement z-20 inset-x-0 h-1/2"
                        v-if="desktopMenuVisible"
                        @mouseleave="hideSubMenu"
                    >
                        <div class="w-1/3 flex items-center m-0 bg-gradient-to-br from-complement to-gray-200 text-primary py-12 px-6 lg:py-12">
                            <div class="relative py-4">
                                <div class="absolute font-sans text-gray-200 text-4xl top-0 left-0">
                                    “
                                </div>
                                <p class="px-6 w-full font-medium text-lg lg:text-xl text-center">
                                    {{ activeSubtitle }}
                                </p>
                                <div class="absolute font-sans text-gray-200 text-4xl bottom-0 right-0">
                                    ”
                                </div>
                            </div>
                        </div>
                        <ul class="w-2/3 bg-primary py-12 px-12 text-accent text-lg font-medium space-y-4">
                            <li
                                v-for="(link, key) in activeSubMenu"
                                :key="key"
                                @click="hideSubMenu"
                            >
                                <Link
                                    :href="link.route"
                                    v-text="link.label"
                                />
                            </li>
                        </ul>
                    </div>
                </transition>
            </nav>
            <!-- search button -->
            <button>
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
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                    />
                </svg>
            </button>
            <!-- hamberger menu on mobile -->
            <button
                class="md:hidden p-2 rounded-full transition-all duration-300 ease-out transform"
                :class="{ 'text-primary bg-gray-700/30' : mobileMenuVisible }"
                @click="mobileMenuVisible = !mobileMenuVisible"
            >
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
                        d="M4 6h16M4 12h8m-8 6h16"
                    />
                </svg>
            </button>
        </div>
        <!-- side menu on mobile -->
        <nav
            class="md:hidden w-5/6 block fixed left-0 inset-y-0 overflow-y-scroll text-soft-theme-light bg-primary shadow-md transition-transform transform duration-300 ease-in-out"
            :class="{ '-translate-x-full': !mobileMenuVisible }"
        >
            <template
                v-for="group in menuGroups"
                :key="group.title"
            >
                <button
                    class="w-full flex items-center justify-between p-6 border-b border-complement-alt text-accent text-xl font-medium text-center"
                    @click="group.showMenu = !group.showMenu"
                >
                    <p>{{ group.title }}</p>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6 transition-transform duration-200 transform"
                        :class="{'rotate-180': group.showMenu}"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M19 9l-7 7-7-7"
                        />
                    </svg>
                </button>
                <transition name="slide-fade">
                    <ul
                        class="px-8 py-4 bg-complement-alt text-primary font-medium leading-loose"
                        v-if="group.showMenu"
                    >
                        <li
                            v-for="(link, key) in group.menu"
                            :key="key"
                            @click="mobileMenuVisible = !mobileMenuVisible"
                        >
                            <Link
                                :href="link.route"
                                v-text="link.label"
                            />
                        </li>
                    </ul>
                </transition>
            </template>
        </nav>
    </header>
    <slot />
    <section class="bg-bank-note px-4 py-8 md:px-16 md:py-24 xl:px-24 xl:pt-32 xl:pb-20">
        <h2 class="text-2xl font-medium text-complement-alt md:text-4xl">
            เว็บไซต์ที่เกี่ยวข้อง
        </h2>
        <div class="grid grid-rows-3 grid-flow-col xl:grid-flow-row xl:grid-cols-3 gap-4 xl:gap-x-8 xl:gap-y-12 mt-6 md:mt-12 xl:mt-16">
            <a
                v-for="(link, key) in externalLinks"
                :key="key"
                :href="link.link"
                class="font-medium xl:text-lg"
                target="_blank"
            >
                {{ link.title }}
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4 xl:h-5 xl:w-5 text-accent inline"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"
                    />
                </svg>
            </a>
        </div>
    </section>
    <footer
        class="bg-complement font-thin text-primary/70 p-4 py-8 md:p-16 xl:p-24 bg-no-repeat bg-left-top md:bg-top"
        style="background-image: url('/image/logo-lg.png')"
    >
        <div
            class="md:flex justify-between items-start"
        >
            <div class="flex items-center">
                <img
                    src="/image/mu-logo.png"
                    alt="mu logo"
                    class="block w-16 h-16 md:w-20 md:h-20"
                >
                <div class="ml-4 text-primary font-medium text-lg md:text-xl">
                    <p>สาขาวิชาวักกะวิทยา</p>
                    <p class="mt-2 md:mt-4">
                        ศิริราชพยาบาล
                    </p>
                </div>
            </div>
            <div>
                <div class="mt-4 md:mt-0 underline decoration-accent text-lg space-x-2">
                    <Link href="/privacy-policy">
                        นโยบายความเป็นส่วนตัว
                    </Link>
                    <span>|</span>
                    <Link href="/contact#map">
                        ที่ตั้ง
                    </Link>
                    <span>|</span>
                    <Link href="/contact#tel">
                        ติดต่อเรา
                    </Link>
                </div>
                <div class="mt-4 text-lg">
                    <p>อาคารหอพักพยาบาล 3 รพ.ศิริราช <br class="lg:hidden"> แขวงบางกอกน้อย กรุงเทพฯ 10700</p>
                    <div class="flex items-center space-x-4">
                        <a href="tel:024198385">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="mr-1 inline h-4 w-5 text-accent"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"
                                />
                            </svg>
                            <span>024198385</span>
                        </a>
                        <a href="mailto:contact@nephrosi.org">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="mr-1 inline h-4 w-5 text-accent"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                                />
                            </svg>
                            <span>contact@nephrosi.org</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <p class="mt-4 md:mt-12 md:text-center text-xs md:text-base">
            © สงวนลิขสิทธิ์ 2022 สาขาวิชาวักกะวิทยา ศิริราชพยาบาล
        </p>
    </footer>
</template>

<script setup>
import { usePage } from '@inertiajs/inertia-vue3';
import { ref } from '@vue/reactivity';
import { nextTick, watch } from '@vue/runtime-core';

const transparentBackground = ref(false);

const externalLinks = [
    { title: 'คณะแพทยศาสตร์ศิริราชพยาบาล', link: 'https://www.si.mahidol.ac.th/th/' },
    { title: 'สมาคมโรคไตแห่งประเทศไทย', link: 'https://www.nephrothai.org/' },
    { title: 'สมาคมปลูกถ่ายอวัยวะแห่งประเทศไทย', link: 'https://transplantthai.org/' },
    { title: 'Thai GN Registry', link: 'https://thaignregistry.org/home' },
    { title: 'Thai KDPI EPTS calculator', link: 'https://www.thai-kdpi-epts.org/' },
    { title: 'Thai cPRA calculator', link: 'https://thai-cpra.org/test' },
];

watch(
    () => usePage().props.value.event.fire,
    (event) => {
        if (! event) {
            return;
        }

        if (usePage().props.value.event.name === 'set-nav-transparent-background') {
            if (desktopMenuVisible.value) {
                return;
            }
            transparentBackground.value = usePage().props.value.event.payload;
        }
    }
);

const showSubMenu = (title) => {
    transparentBackground.value = false;
    desktopMenuVisible.value = true;
    activeMenuTitle.value = title;
    let activeMenu = menuGroups.value.find(menu => menu.title === title);
    activeSubMenu.value = [...activeMenu.menu];
    activeSubtitle.value = activeMenu.subtitle;
};

const hideSubMenu = () => {
    nextTick(() => {
        if (oldPageY > pageY) {
            return;
        }
        activeMenuTitle.value = null;
        desktopMenuVisible.value = false;
        activeSubMenu.value = [];
        activeSubtitle.value = null;
    });
};


let oldPageY = 0;
let pageY = 0;
if (usePage().props.value.agent.isDesktop) {

    document.addEventListener('mousemove', (e) => {
        oldPageY = pageY;
        pageY = e.pageY;
    });
}

const mobileMenuVisible = ref(false);
const desktopMenuVisible = ref(false);
const activeMenuTitle = ref(null);
const activeSubMenu = ref(null);
const activeSubtitle = ref(null);


const menuGroups = ref([
    {
        title: 'เกี่ยวกับเรา',
        subtitle: 'เป็นผู้นำทางอายุรศาสตร์โรคไตของเอเซีย',
        showMenu: false,
        menu: [
            { label: 'ประวัติ', route: '/history' },
            { label: 'วิสัยทัศน์และพันธกิจ', route: '/vision-mission' },
            { label: 'สารจากหัวหน้าสาขาฯ', route: '/message-from-chairman' },
            { label: 'บุลคลากร', route: '/staffs' },
            { label: 'ติดต่อเรา', route: '/contact' },
        ]
    },
    {
        title: 'การศึกษาและบริการ',
        subtitle: 'ผลิตอายุรแพทย์โรคไตให้มีคุณภาพ มีความรู้ความชำนาญในวิชาชีพ มีคุณธรรม กอปรด้วยจริยธรรมที่ดีงาม และเป็นสากล',
        showMenu: false,
        menu: [
            { label: 'สมัครเรียน', route: '/admission' },
            { label: 'โครงการฝึกอบรม', route: '/training-programs' },
            { label: 'วิชาการ', route: '/academic-service' },
            { label: 'คลินิก', route: '/clinics' },
            { label: 'Club Nephro', route: '/club-nephro' },
        ]
    },
    {
        title: 'งานวิจัย',
        subtitle: 'สร้างสรรค์งานวิจัย เพื่อความ เป็นเลิศทางด้านโรคไต เพื่อก่อให้เกิดประโยชน์สูงสุดต่อระบบสาธารณสุขของประเทศไทย',
        showMenu: false,
        menu: [
            { label: 'งานวิจัยที่กำลังดำเนินการ', route: '/research/งานวิจัยที่กำลังดำเนินการ' },
            { label: 'ผลงานวิจัยตีพิมพ์', route: '/research/ผลงานวิจัยตีพิมพ์' },
        ]
    },
    {
        title: 'ความรู้สำหรับประชาชน',
        subtitle: 'ส่งเสริมสุขภาพ โดยยึดผู้ป่วยเป็นศูนย์กลาง บนพื้นฐานของการดูแลแบบองค์รวม',
        showMenu: false,
        menu: [
            { label: 'ความรู้เรื่องโรคไต', route: '/articles?tag=ความรู้เรื่องโรคไต' },
            { label: 'โรคไตวายเรื้อรัง', route: '/articles?tag=โรคไตวายเรื้อรัง' },
            { label: 'การเจาะไต', route: '/articles?tag=การเจาะไต' },
            { label: 'การฟอกเลือดด้วยเครื่องไตเทียม', route: '/articles?tag=การฟอกเลือดด้วยเครื่องไตเทียม' },
            { label: 'การล้างไตทางหน้าท้อง', route: '/articles?tag=การล้างไตทางหน้าท้อง' },
            { label: 'การปลูกถ่ายไต', route: '/articles?tag=การปลูกถ่ายไต' },
        ]
    }
]);
</script>

<style scoped>
    .fade-appear-above-enter-active {
        animation: fade-appear-above .2s;
    }
    .fade-appear-above-leave-active {
        animation: fade-appear-above .2s reverse;
    }
    @keyframes fade-appear-above {
        0% {
            transform: scale(0.9);
            transform: translateY(5%);
            opacity: 0;
        }
        100% {
            transform: scale(1);
            transform: translateY(0%);
            opacity: 1;
        }
    }
</style>