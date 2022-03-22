<template>
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
</template>

<script setup>
import { ref } from '@vue/reactivity';

defineProps({
    transparentBackground: { type: Boolean },
});

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