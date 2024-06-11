<template>
    <section class="bg-white dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <!-- Header -->
            <div class="w-full flex justify-between items-center mb-8 md:mb-16">
                <h1 class="text-xl font-bold text-green-600 md:text-2xl">MySquareCrib</h1>
                <router-link :to="{ name: 'NotificationPage' }">
                    <img :src="bellLogo" class="w-6 h-6 filter-green" alt="Bell Logo" />
                </router-link>
            </div>

            <!-- Search Bar -->
            <div class="w-full max-w-md">
                <input type="text" placeholder="Search your dormitory?"
                    class="w-full p-2 border border-gray-300 rounded-lg">
            </div>

            <!-- Apartment Button -->
            <div class="my-4 w-full max-w-md flex items-center justify-between p-4 border border-gray-300 rounded-lg">
                <div class="flex items-center">
                    <img :src="apartmentLogo" class="w-6 h-6 filter-green" alt="Search Logo">
                    <span class="ml-4 text-gray-500">Apartment</span>
                </div>
                <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </div>

            <!-- Reliable Dormitory Section -->
            <div class="my-4 w-full max-w-4xl mx-auto">
                <h2 class="font-bold text-gray-700 md:text-xl">Reliable Dormitory Near Campus</h2>
                <p class="text-gray-500 md:text-lg">Cheaper costs</p>
                <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-3 gap-1">
                    <div class="card bg-base-100 shadow-xl p-2 sm:p-4">
                        <figure><img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg"
                                alt="Shoes" class="h-48 w-full object-cover" /></figure>
                        <div class="card-body p-2 sm:p-4">
                            <h2 class="card-title text-sm sm:text-base">Shoes!</h2>
                            <p class="text-xs sm:text-sm">If a dog chews shoes whose shoes does he choose?</p>
                            <div class="card-actions justify-end">
                                <button class="btn btn-primary btn-sm">Buy Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-base-100 shadow-xl p-2 sm:p-4">
                        <figure><img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg"
                                alt="Shoes" class="h-48 w-full object-cover" /></figure>
                        <div class="card-body p-2 sm:p-4">
                            <h2 class="card-title text-sm sm:text-base">Shoes!</h2>
                            <p class="text-xs sm:text-sm">If a dog chews shoes whose shoes does he choose?</p>
                            <div class="card-actions justify-end">
                                <button class="btn btn-primary btn-sm">Buy Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-base-100 shadow-xl p-2 sm:p-4">
                        <figure><img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg"
                                alt="Shoes" class="h-48 w-full object-cover" /></figure>
                        <div class="card-body p-2 sm:p-4">
                            <h2 class="card-title text-sm sm:text-base">Shoes!</h2>
                            <p class="text-xs sm:text-sm">If a dog chews shoes whose shoes does he choose?</p>
                            <div class="card-actions justify-end">
                                <button class="btn btn-primary btn-sm">Buy Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-base-100 shadow-xl p-2 sm:p-4">
                        <figure><img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg"
                                alt="Shoes" class="h-48 w-full object-cover" /></figure>
                        <div class="card-body p-2 sm:p-4">
                            <h2 class="card-title text-sm sm:text-base">Shoes!</h2>
                            <p class="text-xs sm:text-sm">If a dog chews shoes whose shoes does he choose?</p>
                            <div class="card-actions justify-end">
                                <button class="btn btn-primary btn-sm">Buy Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Bottom Navigation -->
            <div
                class="fixed bottom-0 left-0 w-full flex justify-around bg-white p-4 border-t border-gray-300 md:hidden">
                <router-link :to="{ name: 'SearchPage' }">
                    <img :src="searchLogo" class="w-6 h-6 filter-green" alt="Search Logo">
                </router-link>

                <img :src="houseLogo" class="w-6 h-6 filter-green" alt="House Logo">
                <img :src="chatLogo" class="w-6 h-6 filter-green" alt="Chat Logo">
                <img :src="userLogo" class="w-6 h-6 filter-green" alt="User Logo">
            </div>

            <!-- Desktop Navigation -->
            <!-- <div class="hidden md:flex justify-around w-full max-w-md mt-8">
          <img :src="searchLogo" class="w-8 h-8 filter-green" alt="Search Logo">
          <img :src="houseLogo" class="w-8 h-8 filter-green" alt="House Logo">
        </div> -->
        </div>
    </section>
</template>

<script setup>
import searchLogo from '@/assets/search.svg';
import houseLogo from '@/assets/house.svg';
import userLogo from '@/assets/user.svg';
import chatLogo from '@/assets/chat.svg';
import apartmentLogo from '@/assets/apartment.svg';
import bellLogo from '@/assets/bell.svg';
</script>

<style>
.filter-green {
    filter: invert(35%) sepia(88%) saturate(396%) hue-rotate(81deg) brightness(94%) contrast(92%);
}
</style>