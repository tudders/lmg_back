<template>
    <div>Welcome Test! {{ currentPage }} <Link href="/">home</Link></div>
</template>

<script setup>
import { Link } from "@inertiajs/inertia-vue3";

defineProps({
    currentPage: {
        type: String,
    },
});
</script>
