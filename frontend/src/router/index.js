import { createRouter, createWebHistory } from 'vue-router';

import AuthLayout from '../layouts/AuthLayout.vue';
import Login from '../pages/Auth/Login.vue';
import Register from '../pages/Auth/Register.vue';
import MainLayout from '../layouts/MainLayout.vue';
import HomePage from '@/pages/homepage/homepage.vue';
import NotificationPage from '@/pages/homepage/notificationPage.vue';
import SearchPage from '@/pages/homepage/searchPage.vue';
import DormInfo from '@/pages/homepage/dormInfo.vue';

// import Listings from '../views/Listings.vue';
// import ListingDetails from '../views/ListingDetails.vue';

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      component: AuthLayout,
      children: [
        {
          path: '',
          name: 'Login',
          component: Login,
        },
        {
          path: 'register',
          name: 'Register',
          component: Register,
        }
      ]
    },
    {
      path: '/home',
      component: MainLayout,
      children: [
        {
          path: '',
          name: 'HomePage',
          component: HomePage,
        },
        {
          path: 'notification',
          name: 'NotificationPage',
          component: NotificationPage,
        },
        {
          path: 'search',
          name: 'SearchPage',
          component: SearchPage,
        },
        {
          path: 'info', // Define the DormInfo route
          name: 'DormInfo',
          component: DormInfo,
        }
      ]
    }
  ]
});

export default router;
