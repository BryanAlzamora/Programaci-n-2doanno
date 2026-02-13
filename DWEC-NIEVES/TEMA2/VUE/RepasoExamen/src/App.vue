<script setup>
import { RouterView } from 'vue-router' 
import { useRouter } from 'vue-router'
import { ref, onMounted } from 'vue'
import { useHostelerosStore } from '@/stores/hosteleroStore'
import LoginView from '@/views/LoginView.vue'

const router = useRouter() 
const hosteleroStore = useHostelerosStore()
const usuarioLogueado = ref(null)

onMounted(() => {
  const hostelero = localStorage.getItem('hostelero')
  if (hostelero) {
    usuarioLogueado.value = JSON.parse(hostelero)
  }
})

function fValidar(obj) {
  hosteleroStore.fUnHostelero(obj)
  
  if (hosteleroStore.unHostelero == null) {
    alert("Usuario y/o contraseña no válidos")
  } else {
    usuarioLogueado.value = hosteleroStore.unHostelero
    localStorage.setItem('hostelero', JSON.stringify(hosteleroStore.unHostelero))
    router.push('/pedidos')
  }
}

function cerrarSesion() {
  localStorage.removeItem('hostelero')
  usuarioLogueado.value = null
  router.push('/login')
}
</script>

<template>
  <div>
    <div v-if="usuarioLogueado">
      <h2>Bienvenido, {{ usuarioLogueado.nombre }}</h2>
      <button @click="cerrarSesion">Cerrar sesión</button>
    </div>
    <div v-else>
      <LoginView></LoginView>
    </div>
    
    <RouterView @validarUsuario="fValidar" />
  </div>
</template>