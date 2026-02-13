<script setup>
import { RouterView, useRouter } from 'vue-router'
import {onMounted,ref} from 'vue'

import {useHostelerosStore} from '@/stores/hostelerosStore'

const router=useRouter()
const usuarioLogueado=ref(null)
const hosteleroStore=useHostelerosStore()

function validarUsuario(obj){
  try{
    hosteleroStore.fUnHostelero(obj)
      
    if(hosteleroStore.unHostelero == null){
        throw 'Usuario no encontrado'
    }else{
      usuarioLogueado.value=hosteleroStore.unHostelero
      localStorage.setItem('hostelero',JSON.stringify(usuarioLogueado.value))
      router.push('/home')
    }
  }catch(error){
    alert(error)
  }
  
}

onMounted(()=>{
  const usuarioStorage=localStorage.getItem('hostelero')
  if(usuarioStorage){
    usuarioLogueado.value=JSON.parse(usuarioStorage);
  }
})

function cerrarSesion() {
  localStorage.removeItem('hostelero')
  usuarioLogueado.value = null
  router.push('/login')
}
</script>

<template>
  <!-- Navbar común para todas las vistas (solo si está logueado) -->
  <header v-if="usuarioLogueado">
    <nav>
      <h1>Bienvenido {{ usuarioLogueado.nombre }}</h1>
      <RouterLink to="/home">Home</RouterLink>
      <RouterLink to="/pedidos">Pedidos</RouterLink>
      <button @click="cerrarSesion">Cerrar Sesión</button>
    </nav>
  </header>

  <!-- Aquí se renderizan las vistas -->
  <RouterView @validarUsuario="validarUsuario" />
</template>
