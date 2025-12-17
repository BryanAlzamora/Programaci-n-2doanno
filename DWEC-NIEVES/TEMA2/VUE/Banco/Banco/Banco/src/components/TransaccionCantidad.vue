<script setup>
    // Función: Mostrar una caja de texto para qué indiquen la cantidad que se va a transferir.
    import {ref} from 'vue';
    
    const emit=defineEmits(['cantidad']);
    const cantidad = ref(1);

    function fFin()
    {
        // Alguna validación?
        emit('cantidad', cantidad);
    }

</script>
<template>
    <p>Cantidad a transferir:</p>
    <input type="number" v-model="cantidad" min="1"/>
    <button @click="fFin">Terminar</button>
</template>