<script setup>
import {ref,watch} from "vue";
import agregarProducto from './components/agregarProducto.vue';
import eliminarProducto from './components/eliminarProducto.vue';
import cesta from './components/eliminarProducto.vue';

const listaCompra=ref([]);

// Cargar lista desde localStorage
const listaCompraGuardada=localStorage.getItem('listaCompra');
if(listaCompraGuardada){
  listaCompra.value=JSON.parse(listaCompraGuardada);
}

//Guardar lista en localStorage
watch(listaCompra,(nuevaLista)=>{
  localStorage.setItem('listaCompra',JSON.stringify(nuevaLista));
});

const opcion=ref('');

function mostrarAgregar(){
  opcion.value='agregar';
}
function mostrarEliminar(){
  opcion.value='eliminar';
}
</script>
  
<template>
  <div>
    <h1>Seleccione una de las dos opciones</h1>
      <div>
        <button @click="mostrarAgregar">Agregar Producto</button>
        <button @click="mostrarEliminar">Eliminar producto</button>
      </div>
  </div>
  <div>
    <agregarProducto v-if="opcion==='agregar'" :listaCompra="listaCompra"></agregarProducto>
    <eliminarProducto v-if="opcion === 'eliminar'" :listaCompra="listaCompra"></eliminarProducto>
  </div>
</template>

<style scoped>
div{
  margin:3em;
}
</style>
