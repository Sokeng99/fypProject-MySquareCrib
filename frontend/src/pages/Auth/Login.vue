<template>
    <section class="bg-white dark:bg-gray-900">
        <p class="text-5xl text-gray-900 dark:text-white font-bold text-center py-12">Welcome back! Glad to see you, Again!</p>
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div
                class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <form @submit.prevent="login" class="space-y-4 md:space-y-6">
                        <div>
                            <label for="email" class="block mb-2 text-sm text-gray-900 dark:text-white font-bold">
                                Email</label>
                            <input v-model="email" type="email" name="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Enter your email" required="">
                        </div>
                        <div>
                            <label for="password"
                                class="block mb-2 text-sm text-gray-900 dark:text-white font-bold">Password</label>
                            <input v-model="password" type="password" name="password" id="password"
                                placeholder="••••••••"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required="">
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="remember" aria-describedby="remember" type="checkbox"
                                        class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="remember" class="text-gray-500 dark:text-gray-300">Remember me</label>
                                </div>
                            </div>
                            <a href="#"
                                class="text-sm font-medium text-primary-50 hover:underline dark:text-primary-50">Forgot
                                password?</a>
                        </div>
                        <button type="submit"
                            class="w-full font-bold text-black bg-primary-50 hover:bg-primary-100 focus:ring-4 focus:outline-none focus:ring-primary-300 rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Login</button>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Don’t have an account yet? <a href="register"
                                class="font-medium text-primary-50 hover:underline dark:text-primary-100">Register Now</a>
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

const email = ref('');
const password = ref('');
const router = useRouter();

const login = async () => {
    try {
        const response = await axios.post('http://127.0.0.1:8000/api/login', {
            email: email.value,
            password: password.value
        });
        console.log('Login successful:', response.data);
        localStorage.setItem('token', response.data.token);
        router.push({ name: 'HomePage' });
    } catch (error) {
        console.error('Login failed:', error);
        if (error.response) {
            console.error('Error response data:', error.response.data);
        }
    }
};
</script>