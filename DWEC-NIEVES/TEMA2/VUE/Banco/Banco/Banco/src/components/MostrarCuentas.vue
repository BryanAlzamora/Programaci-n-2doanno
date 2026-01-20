<script setup>

    // Funcion: Mostrar las cuentas de un cliente. Al hacer click en una, se mostrarán sus movimientos.
    import {ref} from 'vue';
    import MostrarMovimientos from './MostrarMovimientos.vue'

    // Almacen con todas las cuentas de la entidad bancaria.
    import {useCuentasStore} from '../stores/cuentas';
    const cuentasStore = useCuentasStore();

    // Valor booleano que determina ver o no los movimientos de una cuenta
    const ver = ref(false);
    // Array con los movimientos de un cuenta.
    const movimientos = ref([]);

    // Array con las cuentas de un cliente.
    const cuentas = ref([]);
    // Función del almacén cuentas que obtiene las cuentas de un cliente cuyo id esta en el LocalStorage.
    cuentasStore.fCuentasUnCliente(localStorage.getItem('idCliente'));
    // Llenado del array.
    cuentas.value = cuentasStore.listaCuentasCliente;

    function fVerMovimientos(index)
    {
        // Función que obtiene y muestra las cuentas de un cliente.
        ver.value = true;
        movimientos.value = cuentas.value[index].movimientos;
    }
</script>

<template>
    <ul v-for="(cuenta,index) of cuentas" :key="index">
        <li @click="fVerMovimientos(index)">{{ cuenta.numeroCuenta }} </li>
    </ul>
    
    <p v-if="ver"> Lista de movimientos:</p>
    <MostrarMovimientos v-if="ver" :mvtos="movimientos"></MostrarMovimientos>
</template>