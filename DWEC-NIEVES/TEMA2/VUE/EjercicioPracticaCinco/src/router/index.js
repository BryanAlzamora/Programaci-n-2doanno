import { createRouter, createWebHistory } from 'vue-router'
import index from '../views/indexView.vue';


const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: index,
    },
    {
      path: '/consultas',
      name: 'consultas',
      component: () => import('../views/consultasView.vue'),
    },
    {
      path: '/transacciones',
      name: 'transacciones',
      component: () => import('../views/transaccionesView.vue'),
    },
  ],
})

export default router
