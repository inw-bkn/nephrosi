<template>
    <!-- nav menu -->
    <header
        class="fixed top-0 overflow-hidden z-30 w-full transition-colors duration-700"
        :class="{'bg-primary shadow-lg': !transparentBackground}"
    >
        <div class="text-accent px-4 py-2 flex items-center justify-between">
            <!-- the logo -->
            <Link
                class="inline-block"
                href="#"
            >
                <span class="font-medium text-lg">Nephr@SI</span>
            </Link>
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
        <!-- menu on mobile -->
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
                            v-for="(item, key) in group.menu"
                            :key="key"
                        >
                            {{ item.label }}
                        </li>
                    </ul>
                </transition>
            </template>
        </nav>
    </header>
    <slot />
    <div class="bg-complement font-thin text-primary/70 p-4">
        <div class="text-primary font-medium text-lg">
            <p>สาขาวิชาวักกะวิทยา</p>
            <p>ศิริราชพยาบาล</p>
        </div>
        <div class="mt-4 underline decoration-accent space-x-2">
            <Link href="#">
                นโยบายความเป็นส่วนตัว
            </Link>
            <span>|</span>
            <Link href="#">
                ที่ตั้ง
            </Link>
            <span>|</span>
            <Link href="#">
                ติดต่อเรา
            </Link>
        </div>

        <div class="mt-4">
            <p>อาคารหอพักพยาบาล 3 รพ.ศิริราช</p>
            <p>แขวงบางกอกน้อย กรุงเทพฯ 10700</p>
            <div class="flex items-center space-x-4">
                <a
                    class="flex items-center space-x-2"
                    href="tel:024198385"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4 text-accent"
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
                <a
                    class="flex items-center space-x-2"
                    href="mailto:contact@nephrosi.org"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4 text-accent"
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

            <p class="mt-4 text-xs">
                © สงวนลิขสิทธิ์ 2022 สาขาวิชาวักกะวิทยา ศิริราชพยาบาล
            </p>
        </div>
    </div>
</template>

<script setup>
import { usePage } from '@inertiajs/inertia-vue3';
import { ref } from '@vue/reactivity';
import { watch } from '@vue/runtime-core';

const transparentBackground = ref(true);

watch(
    () => usePage().props.value.event.fire,
    (event) => {
        if (! event) {
            return;
        }

        if (usePage().props.value.event.name === 'set-nav-transparent-background') {
            transparentBackground.value = usePage().props.value.event.payload;
        }
    }
);

const mobileMenuVisible = ref(false);
const menuGroups = ref([
    {
        title: 'เกี่ยวกับเรา',
        showMenu: false,
        menu: [
            { label: 'ประวัติ', route: '#' },
            { label: 'วิสัยทัศน์และพันธกิจ', route: '#' },
            { label: 'สารจากหัวหน้าสาขาฯ', route: '#' },
            { label: 'บุลคลากร', route: '#' },
            { label: 'ติดต่อเรา', route: '#' },
        ]
    },
    {
        title: 'การศึกษาและบริการ',
        showMenu: false,
        menu: [
            { label: 'สมัครเรียน', route: '#' },
            { label: 'โครงการอบรม', route: '#' },
            { label: 'วิชาการ', route: '#' },
            { label: 'Club Nephro', route: '#' },
        ]
    },
    {
        title: 'งานวิจัย',
        showMenu: false,
        menu: [
            { label: 'งานวิจัยที่กำลังดำเนินการ', route: '#' },
            { label: 'ผลงานวิจัย', route: '#' },
        ]
    },
    {
        title: 'ความรู้สำหรับประชาชน',
        showMenu: false,
        menu: [
            { label: 'ความรู้เรื่องโรคไต', route: '#' },
            { label: 'ไตวายเรื้อรัง', route: '#' },
            { label: 'หัตถการ', route: '#' },
            { label: 'การปลูกถ่ายไต', route: '#' },
        ]
    }
]);
</script>