import { createRouter, createWebHistory } from 'vue-router'

import Dashboard from '@/pages/Dashboard/Index.vue'
import Clientes from '@/pages/Clientes/Index.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'dashboard',
      component: Dashboard
    },
    {
      path: '/clientes',
      name: 'clientes',
      component: Clientes
    }
  ]
})

export default router