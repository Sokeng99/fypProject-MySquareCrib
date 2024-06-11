<template>
    <section class="bg-white dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <!-- Search Bar -->
            <div class="w-full max-w-md flex items-center mb-4">
                <router-link :to="{ name: 'HomePage' }">
                    <svg class="w-5 h-5" style="margin-right: 16px;" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" transform="rotate(90 5 3)" />
                    </svg>
                </router-link>
                <input type="text" placeholder="Search your dormitory?"
                    class="w-full p-2 border border-gray-300 rounded-lg">
            </div>
        </div>

        <!-- Tabs -->
        <div role="tablist" class="tabs tabs-bordered">
            <input type="radio" name="my_tabs_1" role="tab" class="tab" aria-label="University" id="university-tab"
                v-model="selectedTab" value="university" />
            <input type="radio" name="my_tabs_1" role="tab" class="tab" aria-label="District" id="district-tab"
                v-model="selectedTab" value="district" />
        </div>

        <!-- Tab Content -->
        <div v-if="selectedTab === 'university'">
            <h2 class="text-xl font-bold mb-4">University Name</h2>
            <div class="checkbox-container">
                <div><input type="checkbox" aria-label="Royal University of Phnom Penh" class="btn" /></div>
                <div><input type="checkbox" aria-label="Paragon Intenrnal University" class="btn" /></div>
                <div><input type="checkbox" aria-label="Royal University of Phnom Penh" class="btn" /></div>
            </div>
        </div>
        <div v-if="selectedTab === 'district'">
            <h2 class="text-xl font-bold mb-4">District Name</h2>
            <div class="checkbox-container">
                <div><input type="checkbox" aria-label="7 Makara" class="btn" /></div>
                <div><input type="checkbox" aria-label="Boeung Keng Kang" class="btn" /></div>
                <div><input type="checkbox" aria-label="Chamkarmon" class="btn" /></div>
            </div>
            <!-- Add more content for the District tab here -->
        </div>
    </section>
</template>

<script setup>
import { ref } from 'vue';

const selectedTab = ref('university'); // Default selected tab
</script>

<style>
.checkbox-container .btn:checked {
    background-color: green !important;
    border-color: green !important;

}
</style>
