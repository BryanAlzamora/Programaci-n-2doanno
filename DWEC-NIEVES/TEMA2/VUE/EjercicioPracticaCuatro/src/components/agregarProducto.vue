<script setup>
import {ref} from 'vue';
import btnAgregar from './btnAgregar.vue';

//Variable hija de la lista de compra que tengo en el padre App
const props=defineProps({
    listaCompra: Array
});

const nombreProducto= ref('');
const unidades=ref(1);

let bCantidad=ref(false);

function agregar(){
    if(!nombreProducto.value || unidades.value < 1){
        return
    }

    //booleano para validar si el producto ya existe
    const existe= props.listaCompra.find(p=>p.nombre===nombreProducto.value);
    //condicional para aumentar las unidades o añadirlo como nuevo
    if(existe){
        existe.unidades += unidades.value;
    }else{
        props.listaCompra.push({nombre: nombreProducto.value, unidades: unidades.value});
    }

    //Limpiar despues de al condicion
    nombreProducto.value='';
    unidades.value=1;
    bCantidad.value=false;
}
function mostrarInputUnidades(){
    if(nombreProducto.value.trim()===''){
        console.error('Para indicar las unidades, debe llenar el campo de producto');
        alert('El producto no puede estar vacío');
        return;
    }
    bCantidad=true;
}
</script>
<template>
    <div>
        <label>
            Producto:
            <input type="text" v-model="nombreProducto" ></input>
        </label>

        <button @click="mostrarInputUnidades" v-if="!bCantidad">
            Indicar unidades
        </button>
        <input type="number" v-if="bCantidad" v-model.number="unidades" min="1"></input>
        <btnAgregar @click="agregar"></btnAgregar>
    </div>
</template>
<style scoped>

</style>
