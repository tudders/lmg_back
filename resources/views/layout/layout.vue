<template>
    <main class="bg-gray-500 flex flex-col h-screen">
        <!-- simple navbar -->
        <header
            class="flex items-center justify-between text-white bg-gradient-to-b from-gray-700 via-slate-800 to-zinc-900"
        >
            <div class="text-2xl p-5 font-semibold">
                LMG - Larvel & InertiaJS Demo
            </div>
        </header>
        <div class="flex flex-row bg-zinc-900 overflow-hidden h-full">
            <div class="basis-1/6 h-full">
                <ul class="text-slate-200">
                    <li class="mx-3 p-3 text-lg"><Link href="/">Home</Link></li>
                    <li class="mx-3 p-3 text-lg">
                        <Link href="/users">Users</Link>
                    </li>
                </ul>
            </div>
            <div class="basis-5/6 h-full bg-blue-50">
                <slot />
            </div>
        </div>
    </main>
</template>

<script setup>
import { Link } from "@inertiajs/inertia-vue3";

// resources/js/Layouts/Default.vue
</script>
