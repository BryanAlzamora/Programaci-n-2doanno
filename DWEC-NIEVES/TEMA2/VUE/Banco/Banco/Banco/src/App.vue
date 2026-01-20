<script setup>
  // Función: Identificar al cliente y mostrar la barra de navegación para las diferentes vistas.
  import { RouterLink, RouterView } from 'vue-router'
  import {ref} from 'vue';
  import ValidarUsuario from './components/ValidarUsuario.vue'

  // Almacén con los datos de todos los clientes.
  import {useClientesStore} from './stores/clientes';
  const clientesStore = useClientesStore();

  // Usuario que quiere acceder a la aplicación.
  const usuario = ref(null);

  function fValidar(obj)
  {
    // A través del función fUnCliente del almacén, comprobar que hay uno con ese id y esa contraseña.
    clientesStore.fUnCliente(obj);
    usuario.value = clientesStore.unCliente;
    if (usuario.value == null)
    {
      // usuario no encontrado
      alert("Usuario y/o contraseña no válido");
    }
    else
    {
      // Guardamos en el LocalStorage el id del usuario
      guardarLS();
    }
  }

  function guardarLS()
  {
    localStorage.setItem('idCliente',usuario.value.id);
  }

</script>

<template>
  <header>
    <ValidarUsuario v-if="usuario == null" @validarUsuario="fValidar"></ValidarUsuario>
    <h2 v-else >Bienvenidx</h2>
    <nav>
        <RouterLink to="/">Home</RouterLink>
        <RouterLink v-if="usuario" to="/consultas">Consultas</RouterLink>
        <RouterLink v-if="usuario" to="/transacciones">Transacciones</RouterLink>
      </nav>
  </header>

  <RouterView />
</template>

<style scoped>
</style>
