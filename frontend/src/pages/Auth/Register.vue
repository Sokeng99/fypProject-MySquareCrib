<template>
    <section class="bg-white dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="w-full flex items-center">
                <router-link :to="{ name: 'Login' }" class="flex items-center">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" transform="rotate(90 5 3)" />
                    </svg>
                </router-link>
            </div>
            <img :src="houseLogo" class="w-50 h-50">
            <div
                class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <form @submit.prevent="register" class="space-y-4 md:space-y-6">
                        <div>
                            <label for="first_name"
                                class="block mb-2 text-sm text-gray-900 dark:text-white font-bold">First Name</label>
                            <input v-model="first_name" type="first_name" name="first_name" id="first_name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Enter your First Name" required>
                        </div>
                        <div>
                            <label for="last_name"
                                class="block mb-2 text-sm text-gray-900 dark:text-white font-bold">Last Name</label>
                            <input v-model="last_name" type="last_name" name="last_name" id="last_name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Enter your Last Name" required>
                        </div>
                        <div>
                            <label for="phone_number"
                                class="block mb-2 text-sm text-gray-900 dark:text-white font-bold">Phone Number</label>
                            <input v-model="phone_number" type="phone_number" name="phone_number" id="phone_number"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Enter your Phone Number" required>
                        </div>
                        <div>
                            <label for="email"
                                class="block mb-2 text-sm text-gray-900 dark:text-white font-bold">Email</label>
                            <input v-model="email" type="email" name="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Enter your Email" required>
                        </div>
                        <div>
                            <label for="password"
                                class="block mb-2 text-sm text-gray-900 dark:text-white font-bold">Password</label>
                            <input v-model="password" type="password" name="password" id="password"
                                placeholder="••••••••"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required>
                        </div>
                        <div>
                            <label for="confirm_password"
                                class="block mb-2 text-sm text-gray-900 dark:text-white font-bold">Confirm Password</label>
                            <input v-model="confirm_password" type="password" name="confirm_password" id="confirm_password"
                                placeholder="••••••••"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required>
                        </div>
                        <button type="submit"
                            class="w-full font-bold text-black bg-primary-50 hover:bg-primary-100 focus:ring-4 focus:outline-none focus:ring-primary-300 rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Register</button>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">Already have an account?
                            <router-link :to="{ name: 'Login' }"
                                class="font-medium text-primary-50 hover:underline dark:text-primary-100">Login</router-link>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import { ref } from 'vue';
import axios from 'axios';
import { useRouter } from 'vue-router';
import houseLogo from '@/assets/logo.png';

const first_name = ref('');
const last_name = ref('');
const phone_number = ref('');
const email = ref('');
const password = ref('');
const confirm_password = ref('');
const router = useRouter();

const register = async () => {
    try {
        const response = await axios.post('http://127.0.0.1:8000/api/register', {
            first_name: first_name.value,
            last_name: last_name.value,
            phone_number: phone_number.value,
            email: email.value,
            password: password.value,
            password_confirmation: confirm_password.value // Adjusted field name for Laravel confirmation validation
        });
        if (response.status === 201 || response.status === 200) {
            console.log('Register successful:', response.data);
            router.push({ name: 'Login' });
        } else {
            console.log('Unexpected response status:', response.status);
        }
    } catch (error) {
        if (error.response) {
            //Server responded with a status other than 2xx
            console.error('Register failed:', error.response.data);
            console.error('Status code:', error.response.status);
            console.error('Headers:', error.response.headers);
        } else if (error.request) {
            //The request was made but no response was received
            console.error('No response received:', error.request);
        } else {
            //Something happened in setting up the request that triggered an Error
            console.error('Error in request setup:', error.message);
        }
        console.error('Error config:', error.config);
    }
};
</script>
