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
            <div class="w-full max-w-md mb-4">
                <input type="text" placeholder="Search your dormitory?"
                    class="w-full p-2 border border-gray-300 rounded-lg">
            </div>

            <!-- Property Cards -->
            <div class="w-full max-w-4xl mx-auto">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div v-for="property in properties" :key="property.id" class="card bg-base-100 shadow-xl p-2 mb-6">
                        <figure><img :src="property.image" alt="Property Image" class="h-48 w-full object-cover rounded-lg" /></figure>
                        <div class="card-body p-2">
                            <h2 class="card-title text-lg font-bold">{{ property.title }}</h2>
                            <p class="text-gray-500">{{ property.description }}</p>
                            <div class="flex justify-between items-center mt-4">
                                <span class="text-green-600 font-semibold">{{ property.price }}</span>
                                <button class="btn btn-primary btn-sm" @click="goToDormInfo(property.id)">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Navigation -->
            <div class="fixed bottom-0 left-0 w-full flex justify-around bg-white p-4 border-t border-gray-300 md:hidden">
                <router-link :to="{ name: 'SearchPage' }">
                    <img :src="searchLogo" class="w-6 h-6 filter-green" alt="Search Logo">
                </router-link>
                <img :src="houseLogo" class="w-6 h-6 filter-green" alt="House Logo">
                <img :src="chatLogo" class="w-6 h-6 filter-green" alt="Chat Logo">
                <img :src="userLogo" class="w-6 h-6 filter-green" alt="User Logo">
            </div>
        </div>
    </section>
</template>

<script setup>
import { useRouter } from 'vue-router';
import searchLogo from '@/assets/search.svg';
import houseLogo from '@/assets/house.svg';
import userLogo from '@/assets/user.svg';
import chatLogo from '@/assets/chat.svg';
import apartmentLogo from '@/assets/apartment.svg';
import bellLogo from '@/assets/bell.svg';

const router = useRouter();

const properties = [
    {
        id: 1,
        image: 'https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg',
        title: 'Castle in TH, Thailand',
        description: 'Villa de Kestrel, Aow Leuk beach, Lang...',
        price: '$312 night · $624 total'
    },
    {
        id: 2,
        image: 'https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg',
        title: 'Villa in Amphoe Pathio, Tha...',
        description: 'Villa Pathio Retreat: Luxury beachfront...',
        price: '$221 night · $441 total'
    },
    {
        id: 3,
        image: 'https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg',
        title: 'Farm stay in Tambon Kha...',
        description: 'Barn Stay in a Hedge Maze free-range...',
        price: '$63 night · $139 total'
    }
];

const goToDormInfo = (id) => {
    router.push({ name: 'DormInfo', params: { id } });
};
</script>

<style>
.filter-green {
    filter: invert(35%) sepia(88%) saturate(396%) hue-rotate(81deg) brightness(94%) contrast(92%);
}
</style>
