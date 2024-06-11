<!-- AdminLayout.vue -->
<template>
  <div class="admin-layout">
    <Sidebar class="sidebar" />
    <div class="main-content">
      <Navbar />
      <main class="content">
        <router-view></router-view>
      </main>
    </div>
  </div>
</template>

<script setup>
import Sidebar from '@/components/Sidebar.vue';
import Navbar from '@/components/Navbar.vue';
</script>

<style scoped>
.admin-layout {
  display: flex;
  height: 100vh;
}

.sidebar {
  width: 250px; /* Adjust width as needed */
  height: 100vh;
  position: fixed;
}

.main-content {
  margin-left: 250px; /* Same as sidebar width */
  flex-grow: 1;
  display: flex;
  flex-direction: column;
}

.content {
  flex-grow: 1;
  padding: 20px;
}
</style>
