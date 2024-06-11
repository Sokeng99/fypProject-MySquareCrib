import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'

import Login from '../pages/Auth/Login.vue';
import AdminLayout from '../layouts/AdminLayout.vue';
import AuthLayout from '../layouts/AuthLayout.vue';
import Dashboard from '../pages/Admin/Dashboard.vue';
import UserView from '../pages/Admin/User/UserView.vue';
import UserEdit from '../pages/Admin/User/UserEdit.vue';
import UserAdd from '../pages/Admin/User/UserAdd.vue';
import PropertyView from '../pages/Admin/Property/PropertyView.vue';
import PropertyEdit from '../pages/Admin/Property/PropertyEdit.vue';
import PropertyAdd from '../pages/Admin/Property/PropertyAdd.vue';
import RoleView from '../pages/Admin/RoleAndPermission/RoleView.vue';
import RoleAdd from '../pages/Admin/RoleAndPermission/RoleAdd.vue';
import RoleEdit from '../pages/Admin/RoleAndPermission/RoleEdit.vue';

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
        }
      ]
    },
    {
      path: '/admin',
      component: AdminLayout,
      children: [
        {
          path: '',
          name: 'Dashboard',
          component: Dashboard,
        },
        {
          path: 'users-view',
          name: 'UserView',
          component: UserView,
        },
        {
          path: 'users-add',
          name: 'UserAdd',
          component: UserAdd,
        },
        {
          path: 'users-edit',
          name: 'UserEdit',
          component: UserEdit,
        },
        {
          path: 'property-view',
          name: 'PropertyView',
          component: PropertyView,
        },
        {
          path: 'property-add',
          name: 'PropertyAdd',
          component: PropertyAdd,
        },
        {
          path: 'property-edit',
          name: 'PropertyEdit',
          component: PropertyEdit,
        },
        {
          path: 'role-view',
          name: 'RoleView',
          component: RoleView,
        },
        {
          path: 'role-add',
          name: 'RoleAdd',
          component: RoleAdd,
        },
        {
          path: 'role-edit',
          name: 'RoleEdit',
          component: RoleEdit,
        },
      ]
    }
  ]
})

export default router
