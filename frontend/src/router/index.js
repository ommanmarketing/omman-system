import { createRouter, createWebHistory } from 'vue-router'
import Login from '@/pages/Login.vue'
import DashboardIndex from '@/pages/Dashboard/Index.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/login',
      name: 'login',
      component: Login
    },
    {
      path: '/dashboard',
      name: 'dashboard',
      component: DashboardIndex
    }
  ]
})

export default router