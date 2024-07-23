<script setup>
import { ref, defineProps, computed } from 'vue';
import { Link } from '@inertiajs/vue3';
// import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';

    defineProps({
        collapse:Boolean,

    })
    let show = ref(false);

    const isOpen = () => {show.value = !show.value};

    const closeDropdown = () => {
        show.value = true;
    };

    let show2 = ref(false);

    const isOpen2 = () => {show2.value = !show2.value};

    const closeDropdown2 = () => {
        show2.value = true;
    };

</script>
<template>
    <div>
        <div class="overflow-y-auto overflow-x-hidden flex-grow">
            <ul class="flex flex-col py-2 space-y-1">
                <li :class="{ 'bg-maroon-100 font-bold  border-transparent ': route().current('dashboard') }">
                    <Link href="/dashboard" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-maroon-100 border-l-4 border-transparent pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                            <font-awesome-icon icon="fa-solid fa-home" />
                        </span>
                        <span class="ml-2 text-m tracking-wide truncate" v-show="!collapse">Dashboard</span>
                    </Link>
                </li>
                <li :class="{ 'bg-maroon-100 font-bold  border-transparent ': route().current }">
                    <Link href="/students" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-maroon-100 border-l-4 border-transparent pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                            <font-awesome-icon icon="fa-solid fa-graduation-cap" />
                        </span>
                        <span class="ml-2 text-m tracking-wide truncate" v-show="!collapse">Students</span>
                    </Link>
                </li>
                <li :class="{'bg-maroon-100 font-bold text-gray-800  border-transparent': route().current('create.index') }" v-if="$page.props.auth.permissions.includes('manage-user')">
                    <Link :href="route('user.index')" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-maroon-100 border-l-4 border-transparent pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                            </svg>
                        </span>
                        <span class="ml-2 text-m tracking-wide truncate" v-show="!collapse">Create User</span>
                    </Link>
                </li>

            </ul>
        </div>
    </div>
</template>
