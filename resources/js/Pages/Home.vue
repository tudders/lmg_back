<template>
    <div class="bg-gray-500">
        <div>Welcome Home!</div>
        {{ currentPage }}

        {{ users }}
        <Link href="/test">Test</Link>
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/inertia-vue3";

defineProps({
    currentPage: {
        type: String,
    },
    users: {
        type: Array,
        default: () => [],
    },
});
</script>
