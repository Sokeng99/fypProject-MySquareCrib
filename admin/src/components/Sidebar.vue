<template>
  <aside id="sidebar-multi-level-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">    
    <div class="h-full px-3 py-64 overflow-y-auto bg-gray-50 dark:bg-gray-800">
      <ul class="space-y-2 font-medium">
        <li>
          <router-link :to="{ name: 'Dashboard' }"
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
            :class="{ 'bg-gray-100 dark:bg-gray-700': $route.name === 'Dashboard' }">
            <img :src="dashboardLogo"
              class="w-5 h-5 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
              alt="Logo" />
            <span class="ms-3">Dashboard</span>
          </router-link>
        </li>
        <li>
          <button type="button"
            class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
            aria-controls="dropdown-property" data-collapse-toggle="dropdown-property">
            <img :src="houseLogo"
              class="w-5 h-5 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
              alt="Logo" />
            <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Property</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 4 4 4-4" />
            </svg>
          </button>
          <ul id="dropdown-property" class="hidden py-2 space-y-2">
            <li>
              <router-link :to="{ name: 'PropertyView' }"
                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                :class="{ 'bg-gray-100 dark:bg-gray-700': $route.name === 'PropertyView' }">View Property</router-link>
            </li>
            <li>
              <router-link :to="{ name: 'PropertyAdd' }"
                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                :class="{ 'bg-gray-100 dark:bg-gray-700': $route.name === 'PropertyAdd' }">Add Property</router-link>
            </li>
            <li>
              <a href="#"
                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Invoice</a>
            </li>
          </ul>
        </li>
        <li>
          <button type="button"
            class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
            aria-controls="dropdown-user" data-collapse-toggle="dropdown-user">
            <img :src="userLogo"
              class="w-5 h-5 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
              alt="Logo" />
            <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">User</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 4 4 4-4" />
            </svg>
          </button>
          <ul id="dropdown-user" class="hidden py-2 space-y-2">
            <li>
              <li>
              <router-link :to="{ name: 'UserView' }"
                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                :class="{ 'bg-gray-100 dark:bg-gray-700': $route.name === 'UserView' }">View User</router-link>
            </li>
            </li>
            <li>
              <li>
              <router-link :to="{ name: 'UserAdd' }"
                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                :class="{ 'bg-gray-100 dark:bg-gray-700': $route.name === 'UserAdd' }">Add User</router-link>
            </li>
            </li>
          </ul>
        </li>
        <li>
          <button type="button"
            class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
            aria-controls="dropdown-role" data-collapse-toggle="dropdown-role">
            <img :src="userLogo"
              class="w-5 h-5 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
              alt="Logo" />
            <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Role And Permission</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 4 4 4-4" />
            </svg>
          </button>
          <ul id="dropdown-role" class="hidden py-2 space-y-2">
            <li>
              <li>
              <router-link :to="{ name: 'RoleView' }"
                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                :class="{ 'bg-gray-100 dark:bg-gray-700': $route.name === 'RoleView' }">View Role</router-link>
            </li>
            </li>
            <li>
              <li>
              <router-link :to="{ name: 'RoleAdd' }"
                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                :class="{ 'bg-gray-100 dark:bg-gray-700': $route.name === 'RoleAdd' }">Add Role</router-link>
            </li>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </aside>
</template>

<script>
import houseLogo from '@/assets/house.svg';
import dashboardLogo from '@/assets/dashboard.svg';
import userLogo from '@/assets/user.svg';

export default {
  name: 'Sidebar',
  data() {
    return {
      houseLogo,
      dashboardLogo,
      userLogo,
    }
  },
  mounted() {
    document.addEventListener("DOMContentLoaded", function () {
      const buttonProperty = document.querySelector('button[data-collapse-toggle="dropdown-property"]');
      const dropdownProperty = document.getElementById('dropdown-property');
      const buttonUser = document.querySelector('button[data-collapse-toggle="dropdown-user"]');
      const dropdownUser = document.getElementById('dropdown-user');
      const buttonRole = document.querySelector('button[data-collapse-toggle="dropdown-role"]');
      const dropdownRole = document.getElementById('dropdown-role')

      buttonProperty.addEventListener('click', function () {
        dropdownProperty.classList.toggle('hidden');
      });
      buttonUser.addEventListener('click', function () {
        dropdownUser.classList.toggle('hidden');
      });
      buttonRole.addEventListener('click', function () {
        dropdownRole.classList.toggle('hidden');
      });
    });
  }
}
</script>

<style>
.router-link-active {
  background-color: #f3f4f6; /* Customize the active link background color */
  color: #1f2937; /* Customize the active link text color */
}
.router-link-exact-active {
  background-color: #f3f4f6; /* Customize the exact active link background color */
  color: #1f2937; /* Customize the exact active link text color */
}
</style>
