import { createRouter, createWebHistory } from 'vue-router'

import Dashboard from '@/pages/Dashboard/Index.vue'
import Clientes from '@/pages/Clientes/Index.vue'

const router = createRouter({
  history: createWebHistory(),
  routes: [
    {
      path: '/',
      component: Dashboard
    },
    {
      path: '/clientes',
      component: Clientes
    }
  ]
})

export default router