<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="bg">
        <div class="flex flex-col items-center justify-center min-h-screen">
            <div class="flex items-center justify-center bg-gray-100 p-16 rounded-lg bg-gradient-to-bottom">
                <div class="mr-16">
                    <Link href="/">
                        <img src="images/hfns_logo.png" class="w-72 h-72 object-contain" />
                    </Link>
                </div>
                <div class="w-full sm:max-w-xl text-xl">
                    <slot />
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.bg-gradient-to-bottom {
    background: linear-gradient(to bottom, #2af270, #f1e66f); /* light green to yellow gradient */
}
.bg {
    background: linear-gradient(to bottom, #1e9b57, #d9c450); /* Darker light green to yellow gradient */
    min-height: 100vh; /* Full page height */
    display: flex;
    justify-content: center;
    align-items: center;
}
</style>
