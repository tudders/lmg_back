<template>
    <div class="h-full bg-gray-200 overflow-auto">
        <div class="text-semibold text-xl p-5">Page: {{ currentPage }}</div>
        <button
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold mx-5 my-3 py-2 px-4 rounded"
        >
            <Link href="/newuser"> Create New User</Link>
        </button>

        <div
            v-for="user in users.data"
            :key="user.id"
            class="mx-5 my-3 shadow-xl bg-white rounded-lg flex"
        >
            <span class="p-4"
                ><span
                    class="bg-slate-700 text-slate-200 font-bold py-2 rounded-full mx-2 p-3"
                    ><i class="fa-regular fa-user fa-lg"></i></span
                >{{ user.firstname }} {{ user.lastname }} (#{{ user.id }})</span
            >

            <span class="ml-auto my-2 py-2"
                ><span
                    class="bg-blue-400 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded-full mx-2"
                    ><Link
                        href="/edituser"
                        method="post"
                        :data="{ id: user.id }"
                    >
                        <i class="fas fa-edit mx-1"></i>Edit</Link
                    ></span
                >
                <span
                    @click="deleteUser(user.id)"
                    class="bg-red-400 hover:bg-red-500 text-white font-bold py-2 px-4 rounded-full mx-2"
                    ><i class="fa-regular fa-trash-can mx-1"></i> Delete</span
                ></span
            >
        </div>
        <pagination :links="users.links" />
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/inertia-vue3";
import { router } from "@inertiajs/vue3";
import Pagination from "@/Pages/common/Paginate.vue";

defineProps({
    currentPage: {
        type: String,
    },
    users: {
        type: Array,
        default: () => [],
    },
});

function deleteUser(id) {
    router.post("/deleteuser", { id: id });
}

function editUser(id) {
    router.post("/edituser", { id: id });
}
</script>
