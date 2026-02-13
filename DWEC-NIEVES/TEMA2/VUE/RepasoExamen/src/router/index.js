import { createRouter, createWebHistory } from 'vue-router'
import loginView from '@/views/LoginView.vue'
import PedidosView from '@/views/PedidosView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      redirect:'/login'
    },
    {
      path: '/login',
      name: 'login',
      component: loginView,
    },
    {
      path:'/pedidos',
      name:'pedidos',
      component:PedidosView
    }
  
  ],
})

export default router
