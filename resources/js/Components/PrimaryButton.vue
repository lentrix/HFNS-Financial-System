<template>
    <button
        class="inline-flex items-center px-4 py-2 bg-maroon border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-maroon-dark focus:bg-maroon-dark active:bg-maroon-darker focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
    >
        <slot />
    </button>
</template>

<style scoped>
.bg-maroon {
    background-color: #800000; /* Maroon color */
}

.bg-maroon-dark {
    background-color: #660000; /* Darker shade of maroon */
}

.bg-maroon-darker {
    background-color: #4c0000; /* Even darker shade of maroon */
}
</style>
