<script setup>
import {ref} from 'vue';
import btnEliminar from './btnEliminar.vue';

const props=defineProps({
    listaCompra : Array
});

const nProducto=ref('');


function eliminar(){
    if(nProducto.value.trim()===""){
        alert("No puede estar vacío");
        return;
    }

    const existe= props.listaCompra.findIndex(p=>p.nombre===nProducto.value);

    if(existe === -1){
        alert("Ese producto no está en la lista");
        return;
    }
     props.listaCompra.splice(indice, 1);
    nProducto.value = "";
}

</script>
<template>
    <div>
        <label>Producto ha eliminar:
            <input type="text" v-model="nProducto">
        </label>
    </div>
    <btnEliminar @click="eliminar"></btnEliminar>
</template>
<style scoped>
input {
  margin: 0 5px;
}
</style>
