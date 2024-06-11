<template>
    <section class="bg-white dark:bg-gray-900">
        <div class="flex flex-col items-center justify-start px-6 py-8 mx-auto min-h-screen">
            <div class="w-full flex items-center mb-4">
                <router-link :to="{ name: 'HomePage' }" class="flex items-center">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" transform="rotate(90 5 3)" />
                    </svg>
                    <h1 class="font-bold px-5 text-xl">Notification</h1>
                </router-link>
            </div>

            <div class="w-full max-w-md flex flex-col gap-4">
                <div class="flex items-center p-4 bg-white rounded-lg shadow dark:bg-gray-800">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 rounded-full border-2 border-black flex items-center justify-center">
                            <img :src="userLogo" class="w-7 h-10 rounded-full" alt="User Logo">
                        </div>
                    </div>
                    <div class="ml-4">
                        <div class="text-lg font-semibold dark:text-white">DormFinder A</div>
                        <div class="text-gray-600 dark:text-gray-400">has confirmed your booking. Hooray!!</div>
                    </div>
                    <div class="ml-auto">
                        <button
                            class="px-4 py-2 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75">
                            View
                        </button>
                    </div>
                </div>

                <div class="flex items-center p-4 bg-white rounded-lg shadow dark:bg-gray-800">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 rounded-full border-2 border-black flex items-center justify-center">
                            <img :src="userLogo" class="w-7 h-10 rounded-full" alt="User Logo">
                        </div>
                    </div>
                    <div class="ml-4">
                        <div class="text-lg font-semibold dark:text-white">DormFinder A</div>
                        <div class="text-gray-600 dark:text-gray-400">has confirmed your booking. Hooray!!</div>
                    </div>
                    <div class="ml-auto">
                        <button
                            class="px-4 py-2 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75">
                            View
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>
</template>

<script setup>
import userLogo from '@/assets/user.svg';
</script>

<style scoped></style>