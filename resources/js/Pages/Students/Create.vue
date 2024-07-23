<script setup>
import Sidebar from '@/Layouts/Sidebar.vue';
import { Head, useForm } from '@inertiajs/vue3';

let form = useForm({
    'last_name': '',
    'first_name': '',
    'mi': '',
    'gender': '',
    'birth_date': '',
    'birth_place': '',
    'address': '',
    'address': '',
    'father': '',
    'mother': '',
    'phone': '',
})

function submit() {
    form.post('/students')
}

</script>

<template>
    <Head title="Create Student" />

    <Sidebar>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Create Student</h2>
        </template>

        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-3 text-gray-900">
                        <h1 class="text-2xl">Student Entry Form</h1>
                        <form @submit.prevent="submit">
                            <div class="flex gap-3">
                                <div class="flex-1">
                                    <div class="flex flex-col mb-3">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" id="last_name" v-model="form.last_name">
                                    </div>
                                    <div class="flex flex-col mb-3">
                                        <label for="first_name">First Name</label>
                                        <input type="text" id="first_name" v-model="form.first_name">
                                    </div>
                                    <div class="flex mb-3 gap-2">
                                        <div class="flex-1">
                                            <div class="flex flex-col">
                                                <label for="mi">M.I.</label>
                                                <input type="text" id="mi" v-model="form.mi">
                                            </div>
                                        </div>
                                        <div class="flex-1">
                                            <label for="gender">Gender</label>
                                            <select id="gender" v-model="form.gender">
                                                <option value="female">Female</option>
                                                <option value="male">Male</option>
                                            </select>
                                        </div>
                                        <div class="flex-1">
                                            <label for="birth_date">Birth Date</label>
                                            <input type="date" id="birth_date" v-model="form.birth_date">
                                        </div>
                                    </div>
                                    <div class="flex flex-col mb-3">
                                        <label for="birth_place">Birth Place</label>
                                        <input type="text" id="birth_place" v-model="form.birth_place">
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <div class="flex flex-col mb-3">
                                        <label for="father">Father's Name</label>
                                        <input type="text" id="father" v-model="form.father">
                                    </div>
                                    <div class="flex flex-col mb-3">
                                        <label for="mother">Mother's Name</label>
                                        <input type="text" id="mother" v-model="form.mother">
                                    </div>
                                    <div class="flex flex-col mb-3">
                                        <label for="phone">Phone Number</label>
                                        <input type="text" id="phone" v-model="form.phone">
                                    </div>
                                    <div class="flex flex-col mb-3">
                                        <label for="address">Address</label>
                                        <input type="text" id="address" v-model="form.address">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button class="btn-primary" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </Sidebar>
</template>
