<template>
    <div class="h-full bg-gray-200">
        <div class="text-semibold text-xl p-5">Page: {{ currentPage }}</div>
        <div class="m-5 p-5 shadow-xl bg-white rounded-lg">
            <div class="p-5">Create new user</div>
            <form @submit.prevent="submit">
                <label
                    for="username"
                    class="block text-sm font-medium leading-6 text-gray-900 mx-5 my-2"
                    >First Name:</label
                >
                <div class="mx-5">
                    <input
                        v-model="form.first_name"
                        type="text"
                        name="firstname"
                        id="firstname"
                        class="w-96 ring-slate-100 rounded hover:rounded-lg block flex-1 border border-slate-300 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                    />
                </div>
                <label
                    for="lastname"
                    class="block text-sm font-medium leading-6 text-gray-900 mx-5 my-2"
                    >Last Name:</label
                >
                <div class="mx-5">
                    <input
                        v-model="form.last_name"
                        type="text"
                        name="lastname"
                        id="lastname"
                        class="w-96 ring-slate-100 rounded hover:rounded-lg block flex-1 border border-slate-300 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                    />
                </div>
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold mx-5 my-3 py-2 px-4 rounded"
                    type="submit"
                >
                    Update User (no route yet...)
                </button>
            </form>
        </div>
        {{ user }}
        TODO - popualate input fields with user data, and create update route
    </div>
</template>

<script setup>
import { reactive, onMounted } from "vue";
import { router } from "@inertiajs/vue3";

defineProps({
    currentPage: {
        type: String,
    },
    user: {
        type: Array,
        default: () => [],
    },
});

const form = reactive({
    first_name: null,
    last_name: null,
});

function submit() {
    router.post("/updateuser", form);
}

onMounted(() => {
    form.first_name = this.user.firstname;
    form.last_name = this.user.lastname;
});
</script>
